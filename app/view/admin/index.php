


            <?php
            // Set sesi 'role' sesuai dengan peran pengguna saat login
            $_SESSION['role'] = 'admin'; // atau 'user' sesuai dengan peran pengguna
            ?>



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Konten Utama -->
                <div class="title text-center m-3">
                        <h1>Selamat Datang, Admin!</h1>
                </div>
                <div class="container mt-5">
                    <div class="card col-3">
                        <div class="card-body text-center">
                            <h4>Jumlah Pengguna</h4>
                            <div class="icon-container d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="90" height="90" viewBox="0 0 245 245">
                                    <path d="M12.4598 180.465C4.54943 164.577 0.453319 147.06 0.500403 129.307V129.306C0.500403 68.0935 48.1952 18.0629 108.389 14.1435V68.018C77.7292 71.6482 53.9448 97.6223 53.9448 129.306C53.9448 137.925 55.6637 146.153 58.9757 153.599L12.4598 180.465ZM176.983 136.611H230.855C229.666 154.323 224.424 171.527 215.529 186.895C206.634 202.263 194.327 215.38 179.561 225.234L152.692 178.714C165.834 168.91 174.972 153.834 176.983 136.611ZM172.976 72.0243C163.178 62.2261 150.365 56.0217 136.611 54.4064V0.532355C194.462 4.29428 240.706 50.5377 244.468 108.389H190.594C188.978 94.6354 182.774 81.8225 172.976 72.0243ZM115.695 244.5C75.6316 244.5 40.4051 224.362 19.7651 193.173L66.2855 166.304C71.9642 173.945 79.345 180.161 87.845 184.458C96.4786 188.823 106.022 191.083 115.696 191.056C124.315 191.055 132.543 189.336 139.988 186.025L166.855 232.541C151.391 240.25 134.075 244.5 115.695 244.5Z" fill="#0000FF" stroke="#0000FF"/>
                                </svg>
                                <div class="ms-5">
                                    <h1 class="mt-1 fw-bold"><?= count($data['recordCount']); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container  mt-4">
                    <div class="card col-3">
                        <div class="card-body text-center">
                            <h4>Jumlah Perusahaan</h4>
                            <div class="icon-container d-flex align-items-center mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 245 245" fill="none">
                                    <path d="M12.4598 180.465C4.54943 164.577 0.453319 147.06 0.500403 129.307V129.306C0.500403 68.0935 48.1952 18.0629 108.389 14.1435V68.018C77.7292 71.6482 53.9448 97.6223 53.9448 129.306C53.9448 137.925 55.6637 146.153 58.9757 153.599L12.4598 180.465ZM176.983 136.611H230.855C229.666 154.323 224.424 171.527 215.529 186.895C206.634 202.263 194.327 215.38 179.561 225.234L152.692 178.714C165.834 168.91 174.972 153.834 176.983 136.611ZM172.976 72.0243C163.178 62.2261 150.365 56.0217 136.611 54.4064V0.532355C194.462 4.29428 240.706 50.5377 244.468 108.389H190.594C188.978 94.6354 182.774 81.8225 172.976 72.0243ZM115.695 244.5C75.6316 244.5 40.4051 224.362 19.7651 193.173L66.2855 166.304C71.9642 173.945 79.345 180.161 87.845 184.458C96.4786 188.823 106.022 191.083 115.696 191.056C124.315 191.055 132.543 189.336 139.988 186.025L166.855 232.541C151.391 240.25 134.075 244.5 115.695 244.5Z" fill="#87CEEB" stroke="#87CEEB"/>
                                </svg>
                                <div class="ms-5">
                                    <h1 class="mt-1 fw-bold"><?= count($data['recordCount2']); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="container mt-3">
                    <div class="row justify-content-end ">
                        <div class="col-sm-8 mb-sm-0">
                            <div class="card kartu-dsbrd">
                                <div class="card-body text-center">
                                    <h3 class="fw-bold">Rata-rata Pengunjung per Bulan</h3>
                                    <img class="mt-5 chart-img" src="<?= BASEURL; ?>/img/chart.jpeg" alt="chart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    