<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
        return $this->getBackingStore()->get('certificateBasedApplicationConfigurations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateBasedApplicationConfigurations' => fn(ParseNode $n) => $o->setCertificateBasedApplicationConfigurations($n->getCollectionOfObjectValues([CertificateBasedApplicationConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('certificateBasedApplicationConfigurations', $this->getCertificateBasedApplicationConfigurations());
    }

    /**
     * Sets the certificateBasedApplicationConfigurations property value. The certificateBasedApplicationConfigurations property
     * @param array<CertificateBasedApplicationConfiguration>|null $value Value to set for the certificateBasedApplicationConfigurations property.
    */
    public function setCertificateBasedApplicationConfigurations(?array $value): void {
        $this->getBackingStore()->set('certificateBasedApplicationConfigurations', $value);
    }

}
