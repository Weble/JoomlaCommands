# Joomla Commands

Console Application based on Symfony Console to add a single entrypoint to execute custom commands via CLI through plugins.

## Executing Commands

```php bin/console list```

## Available Commands

- ```php bin/console config``` -  Dumps the configuration file in a table.
       
       +-------------------------+----------------------------------------------------------------------------------+
       | Key                     | Value                                                                            |
       +-------------------------+----------------------------------------------------------------------------------+
       | offline                 | 0                                                                                |
       | offline_message         | Sito fuori servizio per manutenzione.<br /> Riprovare più tardi.                 |
       | display_offline_message | 1                                                                                |
       | offline_image           |                                                                                  |
       | sitename                | Joomla Commands                                                                  |
       | editor                  | tinymce                                                                          |
       | captcha                 | 0                                                                                |
       | list_limit              | 20                                                                               |
       | access                  | 1                                                                                |
       | debug                   | 0                                                                                |
       | debug_lang              | 0                                                                                |
       | debug_lang_const        | 1                                                                                |
       | dbtype                  | mysqli                                                                           |
       | host                    | localhost                                                                        |
       | user                    | root                                                                             |
       | password                |                                                                                  |
       | db                      | joomlacommands                                                                   |
       | dbprefix                | qafxt_                                                                           |
       | live_site               |                                                                                  |
       | secret                  | ukROTox5fAERUfhC                                                                 |
       | gzip                    | 0                                                                                |
       | error_reporting         | default                                                                          |
       | helpurl                 | https://help.joomla.org/proxy?keyref=Help{major}{minor}:{keyref}&lang={langcode} |
       | ftp_host                |                                                                                  |
       | ftp_port                |                                                                                  |
       | ftp_user                |                                                                                  |
       | ftp_pass                |                                                                                  |
       | ftp_root                |                                                                                  |
       | ftp_enable              | 0                                                                                |
       | offset                  | UTC                                                                              |
       | mailonline              | 1                                                                                |
       | mailer                  | mail                                                                             |
       | mailfrom                | email@example.com                                                                 |
       | fromname                | Joomla Commands                                                                  |
       | sendmail                | /usr/sbin/sendmail                                                               |
       | smtpauth                | 0                                                                                |
       | smtpuser                |                                                                                  |
       | smtppass                |                                                                                  |
       | smtphost                | localhost                                                                        |
       | smtpsecure              | none                                                                             |
       | smtpport                | 25                                                                               |
       | caching                 | 0                                                                                |
       | cache_handler           | file                                                                             |
       | cachetime               | 15                                                                               |
       | cache_platformprefix    | 0                                                                                |
       | MetaDesc                |                                                                                  |
       | MetaKeys                |                                                                                  |
       | MetaTitle               | 1                                                                                |
       | MetaAuthor              | 1                                                                                |
       | MetaVersion             | 0                                                                                |
       | robots                  |                                                                                  |
       | sef                     | 1                                                                                |
       | sef_rewrite             | 0                                                                                |
       | sef_suffix              | 0                                                                                |
       | unicodeslugs            | 0                                                                                |
       | feed_limit              | 10                                                                               |
       | feed_email              | none                                                                             |
       | log_path                | /var/www/joomlacommands/administrator/logs                           |
       | tmp_path                | /var/www/joomlacommands/tmp                                          |
       | lifetime                | 15                                                                               |
       | session_handler         | database                                                                         |
       | shared_session          | 0                                                                                |
       +-------------------------+----------------------------------------------------------------------------------+

## Adding new Commands

To add new commands, create a Joomla! plugin in the **console** group, and enable it.
Then add a ```onGetConsoleCommands``` method. That method will receive the Symfony Application as a parameter, and you can add commands to it.

Check the Config Command Plugin as an example:

```php
public function onGetConsoleCommands(Symfony\Component\Console\Application $console)
{
    $console->addCommands([
        new GetConfigCommand()
    ]);
}
```
