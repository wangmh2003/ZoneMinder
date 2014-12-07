/*
 * ZoneMinder Storage Class Interface, $Date$, $Revision$
 * Copyright (C) 2001-2008 Philip Coombes
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/  

#include "zm_db.h"

#ifndef ZM_STORAGE_H
#define ZM_STORAGE_H

class Storage {
	public:

protected:
	unsigned int	id;
	char name[64+1];
	char path[64+1];

public:
	Storage();
	Storage( MYSQL_ROW &dbrow );
	Storage( unsigned int p_id );
	~Storage();

	unsigned int	getId() const { return( id ); }
	const char *getName() const { return( name ); }
	const char *getPath() const { return( path ); }
};

#endif // ZM_STORAGE_H
