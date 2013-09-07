#!/bin/sh

# Pass me the link of the item in question, and I will pull the bib number and call number for locating in Van Pelt.

# http://franklin.library.upenn.edu/record.html?q=picasso&id=FRANKLIN_407705&

# JSON CALL: http://franklin.library.upenn.edu/status.full.json?ids=$BIBNUMBER

get_bib () {
	echo $1 | grep -E -o "[0-9]+"
}

bibnumber=$(get_bib $1)

get_info () {
	wget -qO- "http://franklin.library.upenn.edu/status.full.json?ids="$bibnumber
}

call_number () {
	echo $(get_info) | grep -o "Call no."* | sed 's|<| < |g' | sed -e 's/^.*no.: //g;s/ div*$//g' | sed 's/ <.*$//g'
}

echo "The call number is:" $(call_number)
	
