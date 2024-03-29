<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * Windows Phone 8.1+ Trusted Root Certificate configuration profile
*/
class WindowsPhone81TrustedRootCertificate extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsPhone81TrustedRootCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsPhone81TrustedRootCertificate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhone81TrustedRootCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhone81TrustedRootCertificate {
        return new WindowsPhone81TrustedRootCertificate();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certFileName' => fn(ParseNode $n) => $o->setCertFileName($n->getStringValue()),
            'trustedRootCertificate' => fn(ParseNode $n) => $o->setTrustedRootCertificate($n->getBinaryContent()),
        ]);
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
     * Sets the trustedRootCertificate property value. Trusted Root Certificate
     * @param StreamInterface|null $value Value to set for the trustedRootCertificate property.
    */
    public function setTrustedRootCertificate(?StreamInterface $value): void {
        $this->getBackingStore()->set('trustedRootCertificate', $value);
    }

}
