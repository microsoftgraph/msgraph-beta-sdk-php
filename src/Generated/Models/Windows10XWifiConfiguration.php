<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Windows10XWifiConfiguration extends DeviceManagementResourceAccessProfileBase implements Parsable 
{
    /**
     * Instantiates a new Windows10XWifiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10XWifiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10XWifiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10XWifiConfiguration {
        return new Windows10XWifiConfiguration();
    }

    /**
     * Gets the authenticationCertificateId property value. ID to the Authentication Certificate
     * @return string|null
    */
    public function getAuthenticationCertificateId(): ?string {
        return $this->getBackingStore()->get('authenticationCertificateId');
    }

    /**
     * Gets the customXml property value. Custom XML commands that configures the VPN connection. (UTF8 byte encoding)
     * @return StreamInterface|null
    */
    public function getCustomXml(): ?StreamInterface {
        return $this->getBackingStore()->get('customXml');
    }

    /**
     * Gets the customXmlFileName property value. Custom Xml file name.
     * @return string|null
    */
    public function getCustomXmlFileName(): ?string {
        return $this->getBackingStore()->get('customXmlFileName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationCertificateId' => fn(ParseNode $n) => $o->setAuthenticationCertificateId($n->getStringValue()),
            'customXml' => fn(ParseNode $n) => $o->setCustomXml($n->getBinaryContent()),
            'customXmlFileName' => fn(ParseNode $n) => $o->setCustomXmlFileName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authenticationCertificateId', $this->getAuthenticationCertificateId());
        $writer->writeBinaryContent('customXml', $this->getCustomXml());
        $writer->writeStringValue('customXmlFileName', $this->getCustomXmlFileName());
    }

    /**
     * Sets the authenticationCertificateId property value. ID to the Authentication Certificate
     *  @param string|null $value Value to set for the authenticationCertificateId property.
    */
    public function setAuthenticationCertificateId(?string $value): void {
        $this->getBackingStore()->set('authenticationCertificateId', $value);
    }

    /**
     * Sets the customXml property value. Custom XML commands that configures the VPN connection. (UTF8 byte encoding)
     *  @param StreamInterface|null $value Value to set for the customXml property.
    */
    public function setCustomXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('customXml', $value);
    }

    /**
     * Sets the customXmlFileName property value. Custom Xml file name.
     *  @param string|null $value Value to set for the customXmlFileName property.
    */
    public function setCustomXmlFileName(?string $value): void {
        $this->getBackingStore()->set('customXmlFileName', $value);
    }

}
