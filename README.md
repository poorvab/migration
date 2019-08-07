# migration

Drush Commands for migration:

For users:
drush mim user_xml_importer --update

For node:
drush mim node_xml_importer --update

To reset the status of any migration:
drush migrate-reset-status user_xml_importer

To rollback:
drush migrate-rollback user_xml_importer

I have placed all the migration files at root folder.
