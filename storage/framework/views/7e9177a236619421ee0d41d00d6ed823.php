<?php $__env->startSection('title', 'Student Index'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">Welcome to our Website ALT F4.</h1>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>CV</th>
                <th>Update/Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Carl Bien Andrei Lardizabal</td>
                <td><a href="<?php echo e(asset('https://carlbienandreilardizabal-spec.github.io/MyPortfolio/')); ?>" target="_blank" class="btn btn-primary btn-sm">View CV</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>David Doorn Balawen</td>
                <td><a href="<?php echo e(asset('cv/maria.pdf')); ?>" target="_blank" class="btn btn-primary btn-sm">View CV</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jean Nica Tanudtanud</td>
                <td><a href="<?php echo e(asset('cv/john.pdf')); ?>" target="_blank" class="btn btn-primary btn-sm">View CV</a></td>
            </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('composable.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ALT F4 group/resources/views/index.blade.php ENDPATH**/ ?>