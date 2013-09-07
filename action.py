seatchfile = open("library.txt")
for line in searchfile:
    if "Book" in line: print line
 searchfile.close()
