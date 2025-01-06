<aside class="col-4">
    <button class="btn btn-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#SideBarMenu"
            aria-controls="SideBarMenu">
        <i class="bi bi-list"></i>
    </button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
         id="SideBarMenu" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">فهرست</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <a href="<?= $BaseUrl; ?>/dashboard" class="text-decoration-none text-black"> <i
                            class="bi bi-speedometer2"></i>&nbsp;داشبورد</a>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed menu-button-color" type="button"
                                aria-expanded="false"
                                aria-controls="flush-collapseOne">
                            <a href="<?= $BaseUrl; ?>/products" class="text-decoration-none text-dark"> <i
                                        class="bi bi-p-circle-fill"></i>
                            </a>
                        </button>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</aside>