<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pagination.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <title>Document</title>
</head>

<body>
    <div class="pagination">
        <li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
        <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
        <li class="page-item dots"><a class="page-link" href="#">...</a></li>
        <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
        <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
        <li class="page-item dots"><a class="page-link" href="#">...</a></li>
        <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
        <li class="page-item next-page"><a class="page-link" href="#">Next</a></li>
    </div>


    <script type="text/javascript">
        function getPageList(totalPages, page, maxLength) {
            function range(start, end) {
                return Array.from(Array(end - start + 1), (_, i) => i + start);
            }

            var sideWidth = maxLength < 9 ? 1 : 2;
            var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
            var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

            if (totalPages <= maxLength) {
                return range(1, totalPages);
            }

            if (page <= maxLength - sideWidth - 1 - rightWidth) {
                return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
            }

            if (page >= totalPages - sideWidth - 1 - rightWidth) {
                return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
            }

            return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
        }

        $(function() {
            var numberOfItems = $(".card").length;
            var limitPerPage = 21;
            var totalPages = Math.ceil(numberOfItems / limitPerPage);
            var paginationSize = 7;
            var currentPage;

            function showPage(whichPage) {
                if (whichPage < 1 || whichPage > totalPages) return false;

                currentPage = whichPage;

                $(".card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

                $(".pagination li").slice(1, -1).remove();

                getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                    $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
                        .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
                            .attr({
                                href: "javascript:void(0)"
                            }).text(item || "...")).insertBefore(".next-page");
                });

                $(".previous-page").toggleClass("disable", currentPage === 1);
                $(".next-page").toggleClass("disable", currentPage === totalPages);
                return true;
            }

            $(".pagination").append(
                $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({
                    href: "javascript:void(0)"
                }).text("Prev")),
                $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({
                    href: "javascript:void(0)"
                }).text("Next"))
            );

            $(".card").show();
            showPage(1);

            $(document).on("click", ".pagination li.current-page:not(.active)", function() {
                return showPage(+$(this).text());
            });

            $(".next-page").on("click", function() {
                return showPage(currentPage + 1);
            });

            $(".previous-page").on("click", function() {
                return showPage(currentPage - 1);
            });
        });
    </script>
</body>

</html>