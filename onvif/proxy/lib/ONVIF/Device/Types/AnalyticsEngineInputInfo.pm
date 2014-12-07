package ONVIF::Device::Types::AnalyticsEngineInputInfo;
use strict;
use warnings;


__PACKAGE__->_set_element_form_qualified(1);

sub get_xmlns { 'http://www.onvif.org/ver10/schema' };

our $XML_ATTRIBUTE_CLASS;
undef $XML_ATTRIBUTE_CLASS;

sub __get_attr_class {
    return $XML_ATTRIBUTE_CLASS;
}

use Class::Std::Fast::Storable constructor => 'none';
use base qw(SOAP::WSDL::XSD::Typelib::ComplexType);

Class::Std::initialize();

{ # BLOCK to scope variables

my %InputInfo_of :ATTR(:get<InputInfo>);
my %Extension_of :ATTR(:get<Extension>);

__PACKAGE__->_factory(
    [ qw(        InputInfo
        Extension

    ) ],
    {
        'InputInfo' => \%InputInfo_of,
        'Extension' => \%Extension_of,
    },
    {
        'InputInfo' => 'ONVIF::Device::Types::Config',
        'Extension' => 'ONVIF::Device::Types::AnalyticsEngineInputInfoExtension',
    },
    {

        'InputInfo' => 'InputInfo',
        'Extension' => 'Extension',
    }
);

} # end BLOCK








1;


=pod

=head1 NAME

ONVIF::Device::Types::AnalyticsEngineInputInfo

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
AnalyticsEngineInputInfo from the namespace http://www.onvif.org/ver10/schema.






=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over

=item * InputInfo


=item * Extension




=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Device::Types::AnalyticsEngineInputInfo
   InputInfo =>  { # ONVIF::Device::Types::Config
     Parameters =>  { # ONVIF::Device::Types::ItemList
       SimpleItem => ,
       ElementItem =>  {
       },
       Extension =>  { # ONVIF::Device::Types::ItemListExtension
       },
     },
   },
   Extension =>  { # ONVIF::Device::Types::AnalyticsEngineInputInfoExtension
   },
 },




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

