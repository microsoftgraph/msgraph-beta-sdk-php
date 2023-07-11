<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AzureADAuthentication extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new azureADAuthentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADAuthentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureADAuthentication {
        return new AzureADAuthentication();
    }

    /**
     * Gets the attainments property value. A list of monthly serviceLevelAgreementAttainment objects.
     * @return array<ServiceLevelAgreementAttainment>|null
    */
    public function getAttainments(): ?array {
        $val = $this->getBackingStore()->get('attainments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServiceLevelAgreementAttainment::class);
            /** @var array<ServiceLevelAgreementAttainment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attainments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attainments' => fn(ParseNode $n) => $o->setAttainments($n->getCollectionOfObjectValues([ServiceLevelAgreementAttainment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attainments', $this->getAttainments());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the attainments property value. A list of monthly serviceLevelAgreementAttainment objects.
     * @param array<ServiceLevelAgreementAttainment>|null $value Value to set for the attainments property.
    */
    public function setAttainments(?array $value): void {
        $this->getBackingStore()->set('attainments', $value);
    }

}
