DROP TABLE IF EXISTS `#__octocats`;
 
CREATE TABLE `#__octocats` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `koan` VARCHAR(255) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
 
INSERT INTO `#__octocats` (`koan`) VALUES
        ('Как же я смогу показать Вам Дзен, если Вы сначала не опустошили Вашу чашу?'),
        ('Неужели ты считаешь меня нечеловеком только потому, что я не пью отравы?'),
        ('Хочешь получить просветление - сначала пожертвуй ленью.'),
        ('Хочешь победить - создай условия выгодные тебе.'),
        ('Если ты действительно любишь меня, подойди и обними меня.');