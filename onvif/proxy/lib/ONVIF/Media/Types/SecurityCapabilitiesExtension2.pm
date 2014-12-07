package ONVIF::Media::Types::SecurityCapabilitiesExtension2;
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

my %Dot1X_of :ATTR(:get<Dot1X>);
my %SupportedEAPMethod_of :ATTR(:get<SupportedEAPMethod>);
my %RemoteUserHandling_of :ATTR(:get<RemoteUserHandling>);

__PACKAGE__->_factory(
    [ qw(        Dot1X
        SupportedEAPMethod
        RemoteUserHandling

    ) ],
    {
        'Dot1X' => \%Dot1X_of,
        'SupportedEAPMethod' => \%SupportedEAPMethod_of,
        'RemoteUserHandling' => \%RemoteUserHandling_of,
    },
    {
        'Dot1X' => 'SOAP::WSDL::XSD::Typelib::Builtin::boolean',
        'SupportedEAPMethod' => 'SOAP::WSDL::XSD::Typelib::Builtin::int',
        'RemoteUserHandling' => 'SOAP::WSDL::XSD::Typelib::Builtin::boolean',
    },
    {

        'Dot1X' => 'Dot1X',
        'SupportedEAPMethod' => 'SupportedEAPMethod',
        'RemoteUserHandling' => 'RemoteUserHandling',
    }
);

} # end BLOCK








1;


=pod

=head1 NAME

ONVIF::Media::Types::SecurityCapabilitiesExtension2

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
SecurityCapabilitiesExtension2 from the namespace http://www.onvif.org/ver10/schema.






=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over

=item * Dot1X


=item * SupportedEAPMethod


=item * RemoteUserHandling




=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Media::Types::SecurityCapabilitiesExtension2
   Dot1X =>  $some_value, # boolean
   SupportedEAPMethod =>  $some_value, # int
   RemoteUserHandling =>  $some_value, # boolean
 },




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

