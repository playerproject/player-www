#!/usr/local/bin/python

################################################################################
# File   : bib.py
# Author : Andrew Howard
# Date   : 8 Mar 2001
# Desc   : Bibliography file used by restyle.py
#
# CVS info:
#  $Source: /cvsroot/playerstage/www/player-www/bibimport.py,v $
#  $Author: ahoward $
#  $Revision: 1.1.1.1 $
#
# Usage:
#  (empty)
#
# Requirements:
#  (empty)
#
# Known bugs:
#  (empty)
#
# Theory of operation:
#  (empty)
#
# Possible enhancements:
#  (empty)
################################################################################

import sys
import string
import os

# Define the bibliography
#
bib = {}


# Class for bib entries
#
class BibEntry:
    type = ""
    key = ""
    author = ""
    title = ""
    booktitle = ""
    year = ""
    volume = ""
    number = ""
    pages = "?--?"
    publisher = ""
    institution = ''
    


# Make an entry in the bibliography
#
def make_entry(entry):

    if entry.type == 'conference':
        return ('%s, "%s", <i>%s</i>, pages %s, %s' %
                (entry.author, entry.title, entry.booktitle, entry.pages, entry.year))
    if entry.type == 'journal':
        return ('%s, "%s", <i>%s</i>, %s %s, pages %s, %s' %
                (entry.author, entry.title, entry.booktitle,
                 entry.volume, entry.number, entry.pages, entry.year))
    if entry.type == 'collection':
        return ('%s, "%s", <i>%s</i>, %s, pages  %s, %s' %
                (entry.author, entry.title, entry.booktitle,
                 entry.publisher, entry.pages, entry.year))
    if entry.type == 'phdthesis':
        return ('%s, "%s", PhD thesis, %s, %s' %
                (entry.author, entry.title, entry.school, entry.year))


# Make an author
#
def make_author(words):

    count = 0
    names = string.split(words)

    # Count the total number of ands
    #
    for n in names:
        if n == "and":
            count = count + 1

    # Replace all but the last one
    #
    return string.replace(words, ' and ', ', ', count - 1)


# Read in the bibliography
#
def readbib(filename):

    file = open(filename, "r")
    if not file:
        return

    entry = BibEntry()

    while (1):
        line = file.readline();
        if not line:
            break

        line = string.replace(line, '\n', '')
        line = string.replace(line, '\r', '')

        # Look for start and end of entry
        #
        if string.lower(line[:15]) == '@inproceedings{':
            entry.type = "conference"
            entry.key = string.strip(line[15:])[:-1]
        elif string.lower(line[:9]) == '@article{':
            entry.type = "journal"
            entry.key = string.strip(line[9:])[:-1]
        elif string.lower(line[:14]) == '@incollection{':
            entry.type = "collection"
            entry.key = string.strip(line[14:])[:-1]
        elif string.lower(line[:11]) == '@phdthesis{':
            entry.type = "phdthesis"
            entry.key = string.strip(line[11:])[:-1] 
        elif line[:1] == '}':
            if entry.type != "":
                bib[entry.key] = make_entry(entry)
            entry = BibEntry()

        if entry.type == "":
            continue

        # Parse a line from the body of an entry
        #
        words = string.split(line, '=', 2)
        if len(words) < 2:
            continue

        # Strip out all those undesitable chars
        #
        words[0] = string.strip(words[0])
        words[1] = string.strip(words[1])
        words[1] = string.replace(words[1], '"', '')
        words[1] = string.replace(words[1], '{', '')
        words[1] = string.replace(words[1], '}', '')
        words[1] = string.replace(words[1], ',', '')
        words[1] = string.replace(words[1], "\\'", '')

        #print entry.key + " [" + words[0] + "] [" + words[1] + "]"

        if words[0] == 'author':
            entry.author = make_author(words[1])
        elif words[0] == 'title':
            entry.title = words[1]
        elif words[0] == 'booktitle':
            entry.booktitle = words[1]
        elif words[0] == 'journal':
            entry.booktitle = words[1] 
        elif words[0] == 'year':
            entry.year = words[1]
        elif words[0] == 'volume':
            entry.volume = words[1]
        elif words[0] == 'number':
            entry.number = words[1] 
        elif words[0] == 'pages':
            entry.pages = words[1]
        elif words[0] == 'publisher':
            entry.publisher = words[1]
        elif words[0] == 'school':
            entry.school = words[1] 


if __name__ == "__main__":

    readbib('../pubs/bib/robotics.bib')
    print bib
