##general
* Fix HTML output (https://github.com/joindin/joindin-api/blob/master/src/views/HtmlView.php)
* Enable basic authentication

##routes
* GET /layout/:layoutname - list of records, fields, portals, valuelists
* GET /layout/:layoutname/records - list of records
* GET /layout/:layoutname/fields - list of fields
* GET /layout/:layoutname/portals - list of portals
* GET /layout/:layoutname/valuelists - list of valuelists
* GET /records/:layoutname - as /layout/:layoutname/records (http://stackoverflow.com/a/15772104)
* GET /records/:layoutname/find/:fieldname/:query - list of records matching query search on field
* GET /records/:layoutname/portal/:portalname - portal records
* GET /records/:layoutname/:recordID/portal/:portalname - portal records for record
* GET /record/:layoutname/:recordID - contents of record
* GET /record/:layoutname/find/:fieldname/:query - contents of first record matching query search on field
* GET /record/:layoutname/:recordID/portal/:portalname/:portalrecordID - contents of record from record through portal
* GET /fields/:layoutname - as /layout/:layoutname/fields
* GET /field/:layoutname/:recordID/:fieldname - contents of field
* GET /field/:layoutname/:recordID/portal/:portalname/:portalrecordID/:fieldname - contents of field through portal
* GET /script/:layoutname/:scriptname - result of executed script for layoutname
* GET /portals/:layoutname - as /layout/:layoutname/portals
* GET /valuelists/:layoutname - as /layout/:layoutname/valuelists
* GET /valuelist/:layoutname/:valuelistname - value list entries
* POST /record/:layoutname - new record for layout
* POST /record/:layoutname/:recordID/portal/:portalname - new record in portal for record
* UPDATE /records/:layoutname - update all records
* UPDATE /records/:layoutname/find/:fieldname/:query - update all records matching query search on field
* UPDATE /records/:layoutname/portal/:portalname - update all portal records
* UPDATE /records/:layoutname/:recordID/portal/:portalname - update all portal records for record
* UPDATE /record/:layoutname/:recordID - update record
* UPDATE /record/:layoutname/find/:fieldname/:query - update first record matching query search on field
* UPDATE /field/:layoutname/:recordID/:fieldname - update field
* UPDATE /field/:layoutname/:recordID/portal/:portalname/:portalrecordID/:fieldname - update field through portal
* DELETE /records/:layoutname - delete all records in layout
* DELETE /records/:layoutname/find/:fieldname/:query - delete records matching query search on field
* DELETE /records/:layoutname/:recordID/portal/:portalname - delete all records in portal for record
* DELETE /record/:layoutname/:recordID - delete record
* DELETE /record/:layoutname/find/:fieldname/:query - delete first record matching query search on field
* DELETE /record/:layoutname/:recordID/portal/:portalname/:portalrecordID - delete record in portal for record
