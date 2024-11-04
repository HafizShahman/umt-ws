<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <title>KPJ Damansara Feedback Rating</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://afeld.github.io/emoji-css/emoji.css'>
    <link rel="shortcut icon" href="https://www.kpjhealth.com.my/media/kpj-logo.png">
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('landingpage/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="<?php echo e(asset('landingpage/css/materialdesignicons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Slider -->
    <link rel="stylesheet" href="<?php echo e(asset('landingpage/css/tiny-slider.css')); ?>" />
    <!-- Main Css -->
    <link href="<?php echo e(asset('landingpage/css/style.css')); ?>" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="<?php echo e(asset('landingpage/css/colors/default.css')); ?>" rel="stylesheet" id="color-opt">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: url("<?php echo e(asset('landingpage/images/bg1.png')); ?>");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Hero Start -->
    <section class="bg-half-260 d-table w-100" style="">
        
        <div class="container">
            <div class="row">
                <div class="col-12" style="margin-top: -150px">
                    <img height="100" width="600" style="width:350px, left:40% !important"
                        src="https://media.kpjhealth.com.my/media/hospital/hosp-5/setting/1635323584_e286416a5a8cdb9d8518.png"
                        alt="logo" class="logo">
                    <form class="rating-wrapper" method="post" action="<?php echo e(route('save_feedback')); ?>">
                        <div class="card-body border-0 pt-12">
                            <div class="card-title">
                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <!-- searching area -->
                            </div>
                        </div>
                        <?php echo csrf_field(); ?>
                        <label class="rating-label">Give me your feedback.
                            <div class="ratingItemList" aria-required="true">
                                <input class="rating rating-1" id="rating-1-2" type="radio" value="1 Star"
                                    name="rating" />
                                <label class="rating rating-1" for="rating-1-2">
                                    <i class="em em-angry"></i><br>
                                    <div style="font-size: 15px;">Hate it</div>
                                </label>
                                <input class="rating rating-2" id="rating-2-2" type="radio" value="2 Star"
                                    name="rating" />
                                <label class="rating rating-2" for="rating-2-2">
                                    <i class="em em-disappointed"></i><br>
                                    <div style="font-size: 15px;">Dislike</div>
                                </label>
                                <input class="rating rating-3" id="rating-3-2" type="radio" value="3 Star"
                                    name="rating" />
                                <label class="rating rating-3" for="rating-3-2">
                                    <i class="em em-expressionless"></i><br>
                                    <div style="font-size: 15px;">Natural</div>
                                </label>
                                <input class="rating rating-4" id="rating-4-2" type="radio" value="4 Star"
                                    name="rating" />
                                <label class="rating rating-4" for="rating-4-2">
                                    <i class="em em-grinning"></i><br>
                                    <div style="font-size: 15px;">Like it</div>
                                </label>
                                <input class="rating rating-5" id="rating-5-2" type="radio" value="5 Star"
                                    name="rating" />
                                <label class="rating rating-5" for="rating-5-2">
                                    <i class="em em-star-struck"></i><br>
                                    <div style="font-size: 15px;">Love it</div>
                                </label>
                            </div>
                        </label>
                        <div class="feedback">
                            <div class="container">


                                <label class="rating-label">Name</label>

                                <input type="text" name="name" id="name" placeholder="Name" required>

                                <br>

                                <label class="rating-label">MRN</label>

                                <input type="text" name="mrn" id="mrn" placeholder="MRN">


                                <br>

                                <label class="rating-label">What do you like most about our service?</label>

                                <ul>
                                    <?php
                                        $m = 1;
                                        $n = 1;
                                    ?>
                                    <?php $__currentLoopData = $improve; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <input type="radio" id="hRadio<?php echo e($m++); ?>" name="improve"
                                                class="form-control" value="<?php echo e($row->improvement); ?>">
                                            <label for="hRadio<?php echo e($n++); ?>"><?php echo e($row->improvement); ?></label>

                                            <div class="check">
                                                <div class="inside"></div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                                <br>
                                <label class="rating-label">Likelihood to recommend to others</label>

                                <ul aria-required="true">
                                    <li>
                                        <input type="radio" id="yes" name="recommend" value="Yes">
                                        <label for="yes">Yes</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li>
                                        <input type="radio" id="no" name="recommend" value="No">
                                        <label for="no">No</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>

                                <br>
                                <label class="rating-label">Any comment?</label>

                                <textarea placeholder="What can we do to improve?" name="feedback"></textarea>
                            </div>

                            <button type="submit" class="submit btn btn-primary">Send Your Feedback</button>
                        </div>
                    </form>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->
</body>



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script src="sweetalert2.all.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

</html>
<?php /**PATH C:\laragon\www\umt\resources\views/welcome.blade.php ENDPATH**/ ?>