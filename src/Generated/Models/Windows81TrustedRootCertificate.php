<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * Windows 8.1 Trusted Certificate configuration profile
*/
class Windows81TrustedRootCertificate extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new windows81TrustedRootCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows81TrustedRootCertificate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows81TrustedRootCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows81TrustedRootCertificate {
        return new Windows81TrustedRootCertificate();
    }

    /**
     * Gets the certFileName property value. File name to display in UI.
     * @return string|null
    */
    public function getCertFileName(): ?string {
        $val = $this->getBackingStore()->get('certFileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certFileName'");
    }

    /**
     * Gets the destinationStore property value. Possible values for the Certificate Destination Store.
     * @return CertificateDestinationStore|null
    */
    public function getDestinationStore(): ?CertificateDestinationStore {
        $val = $this->getBackingStore()->get('destinationStore');
        if (is_null($val) || $val instanceof CertificateDestinationStore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationStore'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certFileName' => fn(ParseNode $n) => $o->setCertFileName($n->getStringValue()),
            'destinationStore' => fn(ParseNode $n) => $o->setDestinationStore($n->getEnumValue(CertificateDestinationStore::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'trustedRootCertificate' => fn(ParseNode $n) => $o->setTrustedRootCertificate($n->getBinaryContent()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the trustedRootCertificate property value. Trusted Root Certificate
     * @return StreamInterface|null
    */
    public function getTrustedRootCertificate(): ?StreamInterface {
        $val = $this->getBackingStore()->get('trustedRootCertificate');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustedRootCertificate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certFileName', $this->getCertFileName());
        $writer->writeEnumValue('destinationStore', $this->getDestinationStore());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBinaryContent('trustedRootCertificate', $this->getTrustedRootCertificate());
    }

    /**
     * Sets the certFileName property value. File name to display in UI.
     * @param string|null $value Value to set for the certFileName property.
    */
    public function setCertFileName(?string $value): void {
        $this->getBackingStore()->set('certFileName', $value);
    }

    /**
     * Sets the destinationStore property value. Possible values for the Certificate Destination Store.
     * @param CertificateDestinationStore|null $value Value to set for the destinationStore property.
    */
    public function setDestinationStore(?CertificateDestinationStore $value): void {
        $this->getBackingStore()->set('destinationStore', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the trustedRootCertificate property value. Trusted Root Certificate
     * @param StreamInterface|null $value Value to set for the trustedRootCertificate property.
    */
    public function setTrustedRootCertificate(?StreamInterface $value): void {
        $this->getBackingStore()->set('trustedRootCertificate', $value);
    }

}
