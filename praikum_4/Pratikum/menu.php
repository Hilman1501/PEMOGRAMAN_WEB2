<?php
$ar_menu = [
    'Home' => 'index.php',
    'Produk' => [
        'Produk Lama' => 'produk_lama.php',
        'Produk Baru' => 'produk_baru.php'
    ],
    'Profil' => 'profil.php',
    'About' => 'about.php'
];
?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <?php foreach ($ar_menu as $label => $link): ?>
                        <?php if(is_array($link)): ?>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                                <?php echo $label; ?>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <?php foreach ($link as $sub_label => $sub_link): ?>
                                        <a class="nav-link" href="<?php echo $sub_link; ?>"><?php echo $sub_label; ?></a>
                                    <?php endforeach; ?>
                                </nav>
                            </div>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo $link; ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <?php echo $label; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </nav>
    </div>
