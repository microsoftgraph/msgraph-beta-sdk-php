<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationIdentityDomain implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EducationUserRole|null $appliesTo The user role type to assign to the license. Possible values are: student, teacher, faculty.
    */
    private ?EducationUserRole $appliesTo = null;
    
    /**
     * @var string|null $name Represents the domain for the user account.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new educationIdentityDomain and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationIdentityDomain
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationIdentityDomain {
        return new EducationIdentityDomain();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appliesTo property value. The user role type to assign to the license. Possible values are: student, teacher, faculty.
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
        $o = $this;
        return  [
            'appliesTo' => function (ParseNode $n) use ($o) { $o->setAppliesTo($n->getEnumValue(EducationUserRole::class)); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the name property value. Represents the domain for the user account.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appliesTo', $this->appliesTo);
        $writer->writeStringValue('name', $this->name);
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
     * Sets the appliesTo property value. The user role type to assign to the license. Possible values are: student, teacher, faculty.
     *  @param EducationUserRole|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?EducationUserRole $value ): void {
        $this->appliesTo = $value;
    }

    /**
     * Sets the name property value. Represents the domain for the user account.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
