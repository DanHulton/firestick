ALTER TABLE logs.firestick_log_template ADD COLUMN ci_elapsed FLOAT NOT NULL AFTER render_elapsed;
ALTER TABLE logs.firestick_log_template ADD COLUMN controller_elapsed FLOAT NOT NULL AFTER ci_elapsed;
ALTER TABLE logs.firestick_log_template MODIFY COLUMN mysql_elapsed FLOAT NOT NULL AFTER controller_elapsed;