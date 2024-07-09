
<?php $__env->startSection('conteudo'); ?>
<div class="profile-edit-container">
    <form action="/update" method="post" class="profile-edit-form">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($reg->id); ?>">
        <?php echo method_field('PUT'); ?>
        <h1>Editar Perfil de Usuário</h1>
        <div class="form-group">
            <label for="nome">Editar Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo e($reg->nome); ?>">
        </div>
        <div class="form-group">
            <label for="sobrenome">Editar Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" value="<?php echo e($reg->sobrenome); ?>">
        </div>
        <div class="form-group">
            <label for="email">Editar Email:</label>
            <input type="email" id="email" name="email" value="<?php echo e($reg->email); ?>">
        </div>
        <div class="form-group">
            <label for="mensagem">Editar Mensagem:</label>
            <textarea id="mensagem" name="mensagem"><?php echo e($reg->mensagem); ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-save">Salvar</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\22201912\Documents\Funcionalidades\Funcs\resources\views/formularioedit.blade.php ENDPATH**/ ?>