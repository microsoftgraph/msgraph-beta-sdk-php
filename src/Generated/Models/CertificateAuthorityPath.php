<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CertificateAuthorityPath extends Entity implements Parsable 
{
    /**
     * Instantiates a new certificateAuthorityPath and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CertificateAuthorityPath
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CertificateAuthorityPath {
        return new CertificateAuthorityPath();
    }

    /**
     * Gets the certificateBasedApplicationConfigurations property value. The certificateBasedApplicationConfigurations property
     * @return array<CertificateBasedApplicationConfiguration>|null
    */
    public function getCertificateBasedApplicationConfigurations(): ?array {
        $val = $this->getBackingStore()->get('certificateBasedApplicationConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CertificateBasedApplicationConfiguration::class);
            /** @var array<CertificateBasedApplicationConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateBasedApplicationConfigurations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateBasedApplicationConfigurations' => fn(ParseNode $n) => $o->setCertificateBasedApplicationConfigurations($n->getCollectionOfObjectValues([CertificateBasedApplicationConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('certificateBasedApplicationConfigurations', $this->getCertificateBasedApplicationConfigurations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the certificateBasedApplicationConfigurations property value. The certificateBasedApplicationConfigurations property
     * @param array<CertificateBasedApplicationConfiguration>|null $value Value to set for the certificateBasedApplicationConfigurations property.
    */
    public function setCertificateBasedApplicationConfigurations(?array $value): void {
        $this->getBackingStore()->set('certificateBasedApplicationConfigurations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
