

<?php $__env->startSection('conteudo'); ?>
<div class="profile-header">
    <h2>Perfil de Usuário</h2>
    <a href="/create" class="btn-create">Criar Novo</a>
</div>
<div class="profile-body">
    <?php $__currentLoopData = $valores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="profile-info">
            <div><strong>Nome:</strong> <?php echo e($valor->nome); ?></div>
            <div><strong>Sobrenome:</strong> <?php echo e($valor->sobrenome); ?></div>
            <div><strong>Email:</strong> <?php echo e($valor->email); ?></div>
            <div><strong>Mensagem:</strong> <?php echo e($valor->mensagem); ?></div>
            <div class="profile-actions">
                <a href="/<?php echo e($valor->id); ?>/edit" class="btn-edit">Editar</a>
                <form action="/delete" method="post" id="form-delete-<?php echo e($valor->id); ?>" class="delete-form">
                    <?php echo method_field('DELETE'); ?>
                    <input type="hidden" name="id" value="<?php echo e($valor->id); ?>">
                    <?php echo csrf_field(); ?>
                    <a href="javascript:var c = confirm('Deseja realmente excluir o perfil?'); if (c) { document.getElementById('form-delete-<?php echo e($valor->id); ?>').submit(); }" class="btn-delete">Deletar Perfil</a>
                </form>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\22201912\Documents\Funcionalidades\Funcs\resources\views/index.blade.php ENDPATH**/ ?>