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

# echo "The call number is:" $(call_number)
callNum=$(call_number)

location_info=$(get_info | grep -o "Van Pelt Library")

get_location () {
	if [[ $location_info == "Van Pelt Library" ]] 
	then
		location_info=$location_info
	else
		location_info="N/A"
	fi
}

get_location

# echo "The location is:" $location_info
location=$location_info

# Echo result for return.
echo $callNum,$location

title=$(wget -qO- $1 | grep '<h1 class="recordtitle">' | sed 's|>|> |g' | sed 's|<| <|g' | sed -e 's/^.*h1 class="recordtitle"> //g;s/ *$//g' | sed 's|</h1>||g')

echo "The title is:" $title