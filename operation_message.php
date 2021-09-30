<div class="operation_message">
    <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
        <div class="alert alert-success">
            <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
        </div>
        <?php unset($_SESSION['success']);
    } ?>

<?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>
        <div class="alert alert-danger">
            <strong>Info!</strong> <?php echo $_SESSION['error']; ?>
        </div>
        <?php unset($_SESSION['error']);
    } ?>

<?php if (isset($_SESSION['warning']) && !empty($_SESSION['warning'])) { ?>
        <div class="alert alert-warning">
            <strong>Warning!</strong> <?php echo $_SESSION['warning']; ?>
        </div>
        <?php unset($_SESSION['warning']);
    } ?>

    <?php if (isset($_SESSION['info']) && !empty($_SESSION['info'])) { ?>
        <div class="alert alert-info">
            <strong>Danger!</strong> <?php echo $_SESSION['info']; ?>
        </div>
    <?php unset($_SESSION['info']);
} ?>

    <div class="alert alert-success json_alert_message" id='success_message'>
        <strong>Success!</strong> <span id='message'></span> 
    </div>
    <div class="alert alert-info json_alert_message" id='info_message'>
        <strong>Info!</strong> {{ $alert_message}}
    </div>
    <div class="alert alert-warning json_alert_message" id='warning_message'>
        <strong>Warning!</strong> {{ $alert_message}}
    </div>
    <div class="alert alert-danger json_alert_message" id='danger_message'>
        <strong>Danger!</strong> {{ $alert_message}}
    </div>
</div>