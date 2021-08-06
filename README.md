# Country names parser

This country names parser is just a simple helper to create a select/option HTML
for country names and country codes (in different languages) from an external
data source. It's something we have had to do quite often so have pushed it up
to Github.

## Getting the data

1. Go here https://stefangabos.github.io/world_countries/
2. Select the second JSON option for each country you want
3. Press download
4. Put the file you download here and unzip 

## Data format

This script will expect a directory called data containing directories with
names which are the two letter lowercase language codes. These directories
should contain a file called "countries.json".

## Output

Create a directory called output for your files to go in.
