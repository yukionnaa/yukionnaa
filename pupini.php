<?php
/*  �ݒ�  */

//�p�X���[�h�̐ݒ�
$password = "1234";

//�X�N���v�g�����w��
$script = "./pup.php";

//���O�t�@�C�����w��
$log = "./puplog.php";

//�J�E���^
$cntfile = "./count.log"; //�t�@�C�����w��
$cntcol = "707070";       //�J�E���^�̐F
$cntsize = "8pt";         //�J�E���^�̃T�C�Y
$cntfont = "Osaka,Verdana,Tahoma"; //�J�E���^�̃t�H���g

//�z�[���y�[�W�ݒ�
$homepage = "http://������y��.jp/"; //top���������Ƃ��ɖ߂�ꏊ
$target   = "_top";                      //�߂��

//�^�C�g��
//(�^�C�g���ɉ摜���g���ꍇ�͕��A�����̐ݒ��Y��Ȃ��ł��������j
$title = "������y��";              //�^�C�g����
$ttsize = "20pt";                  //�^�C�g���̕����̑傫��
$ttcolor = "#ffd2e9";              //�^�C�g���̐F
$ttfont = "Osaka,verdana,Tahoma";  //�^�C�g���t�H���g
$tgif = "";                        //�^�C�g���ɉ摜���g��
$tgifw = "100";                    //�摜�̕�
$tgifh = "30";                     //�摜�̍���

//���C���ݒ�
$color   = "#797979";      //�S�̓I�ȕ����F
$link    = "#91a8ed";      //�����N�̐F
$al      = "#91a8ed";      //�J�[�\����������Ƃ��̐F
$vl      = "#91a8ed";      //���ɖK�ꂽ�ۂ̐F
$hover   = "#f4a460";
$dcolor  = "#000000";      //�^�C�g���̐F
$sub_len = 25;             //�^�C�g���̕\���ő啶����
$ccolor  = "#ffd2e9";      //�^�C�g���̉���1�ځ��̐F
$ccolor2 = "#dcdcdc";      //�^�C�g���̉���2�ځ��̐F
$rccolor = "#ffd2e9";      //���X�L���^�C�g���̉���1�ځ��̐F
$rccolor2= "#3399ff";      //���X�L���^�C�g���̉���2�ځ��̐F
$mcolor  = "#8caacf";      //�{���̐F
$msize   = "9pt";          //�{���̕����T�C�Y
$rmcolor = "#a8c5a6";      //���X�L���{���̐F
$ncolor  = "#797979";      //���O�̐F
$nsize   = "9pt";          //���O�̕����T�C�Y
$tcolor  = "#797979";      //���e���Ԃ̕����F
$tsize   = "8pt";          //���e���Ԃ̕����傫��
$bg      = "#ffffff";      //�w�i�F
$bg2     = "";             //�w�i�摜
$fsize   = "9pt";          //�����̑傫��
$ffont   = "Osaka,verdana,Tahoma"; //�t�H���g��

// �ԐM�����Ɛe�L�����g�b�v�ֈړ� (0=no 1=yes)
$topsort = 1;

//��؂���̐F
$hrcolor = "#c1c1c1";

//next back�̐F
$nbcolor  = "#c1c1c1";

//�X���b�h�̕�
$tblsize = "400";

//�ő�ۑ�����
$maxdata = "30";

//1�y�[�W�̕\������
$maxview = "20";

//�ߋ����O�ݒ�
$pastkey  = 1;              //�ߋ����O���� (0=no 1=yes)
$pcntfile = './pcnt.log';   //�ߋ����O�pNO�t�@�C��
$pastdir  = './past/';      //�ߋ����O�̃f�B���N�g��(�T�[�o����̃t���p�X�w��)
$plogmax  = '100';          //�ߋ����O�P�t�@�C���̍ő�s��

//GD�̃o�[�W����(�킩��Ȃ��ꍇ�́A�t����phpinfo.php���g���m�F)
$GD_ver = 2;                //(0 : GD����),(1 : �o�[�W����1),(2 : �o�[�W����2)

//�摜�A�b�v�f�B���N�g��
$UpDir = "./img/";          ///����n�܂�t���p�X

//�T���l�C���A�b�v�f�B���N�g��
$SamDir = "./sam/";         ///����n�܂�t���p�X

//�摜�A�b�vURL
$UpUrl = "./img/";          //http://����͂��܂�p�X

//�T���l�C���A�b�vURL
$SamUrl = "./sam/";         //http://����͂��܂�p�X

//�T���l�C���쐬�p�ő啝�E����
$MaxW = 100;
$MaxH = 100;

//�摜�A�b�v���[�h���e��(�P��byte)
//�� 102400�� 102400 / 1024 = 100kb
$maxsize = "202400";

//�摜�\���ʒu
$ImgAlign = 0;              //(0:��),(1:��),(2:�E),(3:��)

//�ߋ����O���e���ɉ摜��j��
$PastImage = 1;             //(0:�j�����Ȃ�),(1:�j������)

//�ԐM�ɂ��摜�Y�t������
$ResImage = 1;              //(0:�����Ȃ�),(1:������)

//ver 1.27 �ǉ�
//����������������IP�܂��̓z�X�g
//���C���h�J�[�h[*]���g���܂��B
//'',�̌`�ł�����ł����₹�܂��B
$deny = array(
    '*.localhost.com',
    '',
    '',
    '',
    '',
    '');

//ver 1.29 �ǉ�
//�p���݂̂̃R�����g���X�p���Ƃ���B(0:no,1:yes)
$spam = 1;

//�R�����g�ɂ��̕����������Ă�����X�p���Ƃ���B
//'',�̌`�ł�����ł����₹�܂��B
$ng_word = array(
    '�J�W�m',
    '�A�_���g',
    '',
    '',
    '');

//ver 1.31�ǉ�
//�R�����g�ɋ�����URL��
$urlcount = 3;

//�����݂��������烁�[���𑗐M����(0:no,1:yes)
$sendmail = 0;

//�Ǘ��҂̏����݂����[���𑗐M����B(0:no,1:yes)
$adminsendmail = 0;

//�Ǘ��ҏ��
$AdminName = "P up board Mail Sender"; //���̖��O�����[����from�֕\��
$AdminMail = "torance_jpp@hotmail.co.jp";    //�Ǘ��҃��[���A�h���X

//�t�@�C���Y�t���������ꍇ�Ƀ��[���փt�@�C�����̂�Y�t(0:no,1:yes)
//0��I�񂾍ۂ́A���[���ւ͓Y�t�t�@�C���܂ł�URL��\�������܂��B
//0�̏ꍇ�́A$UpUrl��http://����̃t���p�X�ŋL�q���Ă��������B
$mailfile = 1;

//ver1.33�ǉ�
//����������
$MaxName = 30;       //���O
$MaxComment = 3000;  //�R�����g
$MaxSubject = 30;    //�薼
$MaxMail = 100;      //���[���A�h���X
$MaxUrl = 100;       //URL
$MaxPass = 12;       //�p�X���[�h
$MaxFile = 255;      //�摜�A�b�v���[�h�̃p�X

//ver1.36�ǉ�
//�Z�L�����e�B�΍�B���LURL�ȊO����̓��e��e���B���X�N���v�g��URL��http://����
$scripturl = "http://localhost/php/sample/pup/pup.php";

/* �ݒ�I�� */
?>