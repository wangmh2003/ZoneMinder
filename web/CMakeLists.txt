# CMakeLists.txt for the ZoneMinder web files

<<<<<<< HEAD
# Process the api subdirectory
add_subdirectory(api)
# Process the tools/mootools subdirectory
add_subdirectory(tools/mootools)

# Create files from the .in files
configure_file(includes/config.php.in "${CMAKE_CURRENT_BINARY_DIR}/includes/config.php" @ONLY)

# Install the web files
install(DIRECTORY api ajax css graphics includes js lang skins tools views DESTINATION "${ZM_WEBDIR}" PATTERN "*.in" EXCLUDE PATTERN "*Make*" EXCLUDE PATTERN "*cmake*" EXCLUDE)
install(FILES index.php DESTINATION "${ZM_WEBDIR}")
install(FILES "${CMAKE_CURRENT_BINARY_DIR}/includes/config.php" DESTINATION "${ZM_WEBDIR}/includes")

# Install the api config files (if its not in the source directory)
if(NOT (CMAKE_BINARY_DIR STREQUAL CMAKE_SOURCE_DIR))
	install(FILES "${CMAKE_CURRENT_BINARY_DIR}/api/app/Config/core.php" DESTINATION "${ZM_WEBDIR}/api/app/Config")
	install(FILES "${CMAKE_CURRENT_BINARY_DIR}/api/app/Config/database.php" DESTINATION "${ZM_WEBDIR}/api/app/Config")
endif(NOT (CMAKE_BINARY_DIR STREQUAL CMAKE_SOURCE_DIR))

# Install the mootools symlinks (if its not in the source directory)
if(NOT (CMAKE_BINARY_DIR STREQUAL CMAKE_SOURCE_DIR))
	install(FILES "${CMAKE_CURRENT_BINARY_DIR}/tools/mootools/mootools-core.js" DESTINATION "${ZM_WEBDIR}/tools/mootools")
	install(FILES "${CMAKE_CURRENT_BINARY_DIR}/tools/mootools/mootools-more.js" DESTINATION "${ZM_WEBDIR}/tools/mootools")
endif(NOT (CMAKE_BINARY_DIR STREQUAL CMAKE_SOURCE_DIR))
=======
# Create files from the .in files
#configure_file(app/Config/config.php.in ${CMAKE_CURRENT_SOURCE_DIR}/app/Config/config.php @ONLY)

# Install the web files
install(DIRECTORY app lib DESTINATION "${ZM_WEBDIR}" PATTERN "*.in" EXCLUDE PATTERN "*Make*" EXCLUDE PATTERN "*cmake*" EXCLUDE)
install(FILES index.php README.md DESTINATION "${ZM_WEBDIR}")
>>>>>>> origin/modern
