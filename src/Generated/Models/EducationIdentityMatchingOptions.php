<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationIdentityMatchingOptions implements AdditionalDataHolder, Parsable 
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
     * @var string|null $sourcePropertyName The name of the source property, which should be a field name in the source data. This property is case-sensitive.
    */
    private ?string $sourcePropertyName = null;
    
    /**
     * @var string|null $targetDomain The domain to suffix with the source property to match on the target. If provided as null, the source property will be used to match with the target property.
    */
    private ?string $targetDomain = null;
    
    /**
     * @var string|null $targetPropertyName The name of the target property, which should be a valid property in Azure AD. This property is case-sensitive.
    */
    private ?string $targetPropertyName = null;
    
    /**
     * Instantiates a new educationIdentityMatchingOptions and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationIdentityMatchingOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationIdentityMatchingOptions {
        return new EducationIdentityMatchingOptions();
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
            'sourcePropertyName' => function (ParseNode $n) use ($o) { $o->setSourcePropertyName($n->getStringValue()); },
            'targetDomain' => function (ParseNode $n) use ($o) { $o->setTargetDomain($n->getStringValue()); },
            'targetPropertyName' => function (ParseNode $n) use ($o) { $o->setTargetPropertyName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the sourcePropertyName property value. The name of the source property, which should be a field name in the source data. This property is case-sensitive.
     * @return string|null
    */
    public function getSourcePropertyName(): ?string {
        return $this->sourcePropertyName;
    }

    /**
     * Gets the targetDomain property value. The domain to suffix with the source property to match on the target. If provided as null, the source property will be used to match with the target property.
     * @return string|null
    */
    public function getTargetDomain(): ?string {
        return $this->targetDomain;
    }

    /**
     * Gets the targetPropertyName property value. The name of the target property, which should be a valid property in Azure AD. This property is case-sensitive.
     * @return string|null
    */
    public function getTargetPropertyName(): ?string {
        return $this->targetPropertyName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appliesTo', $this->appliesTo);
        $writer->writeStringValue('sourcePropertyName', $this->sourcePropertyName);
        $writer->writeStringValue('targetDomain', $this->targetDomain);
        $writer->writeStringValue('targetPropertyName', $this->targetPropertyName);
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
     * Sets the sourcePropertyName property value. The name of the source property, which should be a field name in the source data. This property is case-sensitive.
     *  @param string|null $value Value to set for the sourcePropertyName property.
    */
    public function setSourcePropertyName(?string $value ): void {
        $this->sourcePropertyName = $value;
    }

    /**
     * Sets the targetDomain property value. The domain to suffix with the source property to match on the target. If provided as null, the source property will be used to match with the target property.
     *  @param string|null $value Value to set for the targetDomain property.
    */
    public function setTargetDomain(?string $value ): void {
        $this->targetDomain = $value;
    }

    /**
     * Sets the targetPropertyName property value. The name of the target property, which should be a valid property in Azure AD. This property is case-sensitive.
     *  @param string|null $value Value to set for the targetPropertyName property.
    */
    public function setTargetPropertyName(?string $value ): void {
        $this->targetPropertyName = $value;
    }

}
