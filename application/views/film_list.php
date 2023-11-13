<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Film</h1>

    <div class="row">
        <div class="col-lg-6">



            <table class="table table-hover">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Film</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($films as $film) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td>
                                <a href="<?= base_url("base/pilih_kursi/{$film['id']}"); ?>">
                                    <?= $film['judul']; ?>
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