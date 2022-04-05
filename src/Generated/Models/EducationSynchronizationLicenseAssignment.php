<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationLicenseAssignment implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var EducationUserRole|null $appliesTo The user role type to assign to license. Possible values are: student, teacher, faculty. */
    private ?EducationUserRole $appliesTo = null;
    
    /** @var array<string>|null $skuIds Represents the SKU identifiers of the licenses to assign. */
    private ?array $skuIds = null;
    
    /**
     * Instantiates a new educationSynchronizationLicenseAssignment and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSynchronizationLicenseAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EducationSynchronizationLicenseAssignment {
        return new EducationSynchronizationLicenseAssignment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appliesTo property value. The user role type to assign to license. Possible values are: student, teacher, faculty.
     * @return EducationUserRole|null
    */
    public function getAppliesTo(): ?EducationUserRole {
        return $this->appliesTo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'appliesTo' => function (self $o, ParseNode $n) { $o->setAppliesTo($n->getEnumValue(EducationUserRole::class)); },
            'skuIds' => function (self $o, ParseNode $n) { $o->setSkuIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the skuIds property value. Represents the SKU identifiers of the licenses to assign.
     * @return array<string>|null
    */
    public function getSkuIds(): ?array {
        return $this->skuIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appliesTo', $this->appliesTo);
        $writer->writeCollectionOfPrimitiveValues('skuIds', $this->skuIds);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the appliesTo property value. The user role type to assign to license. Possible values are: student, teacher, faculty.
     *  @param EducationUserRole|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?EducationUserRole $value ): void {
        $this->appliesTo = $value;
    }

    /**
     * Sets the skuIds property value. Represents the SKU identifiers of the licenses to assign.
     *  @param array<string>|null $value Value to set for the skuIds property.
    */
    public function setSkuIds(?array $value ): void {
        $this->skuIds = $value;
    }

}
