# A tasty project
The [San Francisco Street Food Festival](http://www.sfstreetfoodfest.com/) started in 2009 and may have its last hurrah in 2014. This is the code that powers the website.

# Instructions on z_* folders

## Downloads
Press kits, fact sheets, etc. should live in `/z_downloads` and be linked absolutely wherever they are referenced since they are linked from year to year.

## Logos
Sponsor and vendor logos should live in `/z_logos` in their respective folders and be referenced absolutely since they could be linked from year to year. Logos should be no wider than 200px and no taller than 125px.

## Archiving past years
Each year should be archived in its own folder under `/z_past`:
```
/app/*
/css/*
/images/*
/inc/*
/js/*
*.php
```

### Do not archive
```
/log
favicon.ico
```