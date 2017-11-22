<table id="tabel" class="display">
        <thead>
            <tr>
                <th><strong>Paardnaam</strong></th>
                <th><strong>Beschrijving</strong></th>
                
            </tr>
        </thead>

      
        <?php foreach($paarden as $paard) { ?>

            <tr>
                <td><?php echo $paard->Paardennaam; ?></td>
                <td><?php echo $paard->Beschrijving; ?></td>
                <td> <a href="<?php echo site_url('../paarden/'.$paard->Beschrijving); ?>">View</a> | 
                <a href="<?php echo site_url('paarden/edit/'.$paard->Id); ?>">Edit</a> | 
                <a href="<?php echo site_url('paarden/delete/'.$paard->Id); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
            </tr>
        <?php } ?>
    </table>