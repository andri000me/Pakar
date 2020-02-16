<?php if($this->session->flashdata('notif_penyakit_hapus')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('notif_penyakit_hapus').'</div>'; ?>
          <?php endif; ?>

<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <h4 class="card-title">Gejala Table</h4>
            <button><?php echo anchor('ctrGejala/tbhGejala','Tambah Data', array('class' => 'btn btn-sm btn-info')); ?></button>
                    <table id="myTable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Kode Gejala </th>
                          <th> Nama Gejala </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php
                        $b = 1;
                        foreach($gejala as $i):
                        ?>
                  <tr>  
                        <td><?php echo $b++; ?></td>
                        <td><?php echo $i->kode_gejala;?> </td>
                        <td><?php echo $i->nama_gejala;?> </td>
                        <td>
                          <?php echo anchor('ctrGejala/edit/'.$i->id_gejala,'Edit Data', array('class' => 'btn btn-sm btn-info')); ?>
                          <!-- <?php echo anchor('ctrGejala/hapus/'.$i->id_gejala,'Hapus Data', array('class' => 'btn btn-sm btn-danger')); ?> -->
                          <button location.href="" class='btn btn-sm btn-danger' onClick='ConfirmDelete()'>Delete</button>
                        </td>
                  </tr>
                  <?php endforeach;?>
                      </tbody>
                    </table>
        </div>
    </div>
</div>
<script>
function ConfirmDelete()
      {
            if (confirm("Hapus Gejala?"))
                 location.href='ctrGejala/hapus/<?php echo $i->id_gejala?>';
            else
                 location.href='ctrGejala';
      }
</script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>