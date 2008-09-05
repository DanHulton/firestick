CREATE DATABASE IF NOT EXISTS logs;

DROP TABLE IF EXISTS logs.firestick_log_template;
CREATE TABLE logs.firestick_log_template (
    ip                      INT UNSIGNED NOT NULL,
    page                    VARCHAR(255) NOT NULL,
    user_agent              VARCHAR(255) NOT NULL,
    referrer                VARCHAR(255) NOT NULL,
    logged                  TIMESTAMP NOT NULL
                            default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    render_elapsed          FLOAT NOT NULL,
    mysql_count_queries     TINYINT UNSIGNED NOT NULL,
    mysql_queries           TEXT NOT NULL,
    mysql_elapsed           FLOAT NOT NULL
) ENGINE=ARCHIVE;