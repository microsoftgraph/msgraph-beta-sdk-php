<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class MacOSTrustedRootCertificate extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $certFileName File name to display in UI.
    */
    private ?string $certFileName = null;
    
    /**
     * @var StreamInterface|null $trustedRootCertificate Trusted Root Certificate.
    */
    private ?StreamInterface $trustedRootCertificate = null;
    
    /**
     * Instantiates a new macOSTrustedRootCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSTrustedRootCertificate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSTrustedRootCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSTrustedRootCertificate {
        return new MacOSTrustedRootCertificate();
    }

    /**
     * Gets the certFileName property value. File name to display in UI.
     * @return string|null
    */
    public function getCertFileName(): ?string {
        return $this->certFileName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certFileName' => fn(ParseNode $n) => $o->setCertFileName($n->getStringValue()),
            'trustedRootCertificate' => fn(ParseNode $n) => $o->setTrustedRootCertificate($n->getBinaryContent()),
        ]);
    }

    /**
     * Gets the trustedRootCertificate property value. Trusted Root Certificate.
     * @return StreamInterface
    */
    public function getTrustedRootCertificate(): StreamInterface {
        return $this->trustedRootCertificate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certFileName', $this->certFileName);
        $writer->writeBinaryContent('trustedRootCertificate', $this->trustedRootCertificate);
    }

    /**
     * Sets the certFileName property value. File name to display in UI.
     *  @param string|null $value Value to set for the certFileName property.
    */
    public function setCertFileName(?string $value ): void {
        $this->certFileName = $value;
    }

    /**
     * Sets the trustedRootCertificate property value. Trusted Root Certificate.
     *  @param StreamInterface|null $value Value to set for the trustedRootCertificate property.
    */
    public function setTrustedRootCertificate(?StreamInterface $value ): void {
        $this->trustedRootCertificate = $value;
    }

}
