<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationValue extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the object was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var GroupPolicyDefinitionValue|null $definitionValue The group policy definition value associated with the presentation value.
    */
    private ?GroupPolicyDefinitionValue $definitionValue = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time the object was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var GroupPolicyPresentation|null $presentation The group policy presentation associated with the presentation value.
    */
    private ?GroupPolicyPresentation $presentation = null;
    
    /**
     * Instantiates a new groupPolicyPresentationValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationValue {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.groupPolicyPresentationValueBoolean': return new GroupPolicyPresentationValueBoolean();
                case '#microsoft.graph.groupPolicyPresentationValueDecimal': return new GroupPolicyPresentationValueDecimal();
                case '#microsoft.graph.groupPolicyPresentationValueList': return new GroupPolicyPresentationValueList();
                case '#microsoft.graph.groupPolicyPresentationValueLongDecimal': return new GroupPolicyPresentationValueLongDecimal();
                case '#microsoft.graph.groupPolicyPresentationValueMultiText': return new GroupPolicyPresentationValueMultiText();
                case '#microsoft.graph.groupPolicyPresentationValueText': return new GroupPolicyPresentationValueText();
            }
        }
        return new GroupPolicyPresentationValue();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdDateTime property value. The date and time the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the definitionValue property value. The group policy definition value associated with the presentation value.
     * @return GroupPolicyDefinitionValue|null
    */
    public function getDefinitionValue(): ?GroupPolicyDefinitionValue {
        return $this->definitionValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'definitionValue' => function (ParseNode $n) use ($o) { $o->setDefinitionValue($n->getObjectValue(array(GroupPolicyDefinitionValue::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'presentation' => function (ParseNode $n) use ($o) { $o->setPresentation($n->getObjectValue(array(GroupPolicyPresentation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the presentation property value. The group policy presentation associated with the presentation value.
     * @return GroupPolicyPresentation|null
    */
    public function getPresentation(): ?GroupPolicyPresentation {
        return $this->presentation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('definitionValue', $this->definitionValue);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('presentation', $this->presentation);
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
     * Sets the createdDateTime property value. The date and time the object was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the definitionValue property value. The group policy definition value associated with the presentation value.
     *  @param GroupPolicyDefinitionValue|null $value Value to set for the definitionValue property.
    */
    public function setDefinitionValue(?GroupPolicyDefinitionValue $value ): void {
        $this->definitionValue = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the object was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the presentation property value. The group policy presentation associated with the presentation value.
     *  @param GroupPolicyPresentation|null $value Value to set for the presentation property.
    */
    public function setPresentation(?GroupPolicyPresentation $value ): void {
        $this->presentation = $value;
    }

}
