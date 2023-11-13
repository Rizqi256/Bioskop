<div class="container-fluid">

    <!-- Page Heading -->
    <h1>Pilih Kursi untuk Film <?= $film['judul']; ?></h1>
    <div class="row">
        <div class="col-lg-6">



            <table class="table table-hover">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kursi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($seats as $seat) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td>
                                <a href="<?= base_url("base/pesan_kursi/{$film['id']}/{$seat['id']}"); ?>">
                                    Kursi <?= $seat['nomor_kursi']; ?>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>


            </table>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



</html>