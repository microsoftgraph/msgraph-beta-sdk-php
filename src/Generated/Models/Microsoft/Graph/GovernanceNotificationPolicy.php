<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceNotificationPolicy implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $enabledTemplateTypes  */
    private ?array $enabledTemplateTypes = null;
    
    /** @var array<GovernanceNotificationTemplate>|null $notificationTemplates  */
    private ?array $notificationTemplates = null;
    
    /**
     * Instantiates a new governanceNotificationPolicy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceNotificationPolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceNotificationPolicy {
        return new GovernanceNotificationPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enabledTemplateTypes property value. 
     * @return array<string>|null
    */
    public function getEnabledTemplateTypes(): ?array {
        return $this->enabledTemplateTypes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'enabledTemplateTypes' => function (self $o, ParseNode $n) { $o->setEnabledTemplateTypes($n->getCollectionOfPrimitiveValues()); },
            'notificationTemplates' => function (self $o, ParseNode $n) { $o->setNotificationTemplates($n->getCollectionOfObjectValues(GovernanceNotificationTemplate::class)); },
        ];
    }

    /**
     * Gets the notificationTemplates property value. 
     * @return array<GovernanceNotificationTemplate>|null
    */
    public function getNotificationTemplates(): ?array {
        return $this->notificationTemplates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('enabledTemplateTypes', $this->enabledTemplateTypes);
        $writer->writeCollectionOfObjectValues('notificationTemplates', $this->notificationTemplates);
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
     * Sets the enabledTemplateTypes property value. 
     *  @param array<string>|null $value Value to set for the enabledTemplateTypes property.
    */
    public function setEnabledTemplateTypes(?array $value ): void {
        $this->enabledTemplateTypes = $value;
    }

    /**
     * Sets the notificationTemplates property value. 
     *  @param array<GovernanceNotificationTemplate>|null $value Value to set for the notificationTemplates property.
    */
    public function setNotificationTemplates(?array $value ): void {
        $this->notificationTemplates = $value;
    }

}
