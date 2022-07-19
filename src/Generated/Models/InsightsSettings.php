<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InsightsSettings extends Entity implements Parsable 
{
    /**
     * @var string|null $disabledForGroup The ID of an Azure Active Directory group, of which the specified type of insights are disabled for its members. Default is empty. Optional.
    */
    private ?string $disabledForGroup = null;
    
    /**
     * @var bool|null $isEnabledInOrganization true if the specified type of insights are enabled for the organization; false if the specified type of insights are disabled for all users without exceptions. Default is true. Optional.
    */
    private ?bool $isEnabledInOrganization = null;
    
    /**
     * Instantiates a new insightsSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.insightsSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InsightsSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InsightsSettings {
        return new InsightsSettings();
    }

    /**
     * Gets the disabledForGroup property value. The ID of an Azure Active Directory group, of which the specified type of insights are disabled for its members. Default is empty. Optional.
     * @return string|null
    */
    public function getDisabledForGroup(): ?string {
        return $this->disabledForGroup;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'disabledForGroup' => function (ParseNode $n) use ($o) { $o->setDisabledForGroup($n->getStringValue()); },
            'isEnabledInOrganization' => function (ParseNode $n) use ($o) { $o->setIsEnabledInOrganization($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isEnabledInOrganization property value. true if the specified type of insights are enabled for the organization; false if the specified type of insights are disabled for all users without exceptions. Default is true. Optional.
     * @return bool|null
    */
    public function getIsEnabledInOrganization(): ?bool {
        return $this->isEnabledInOrganization;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('disabledForGroup', $this->disabledForGroup);
        $writer->writeBooleanValue('isEnabledInOrganization', $this->isEnabledInOrganization);
    }

    /**
     * Sets the disabledForGroup property value. The ID of an Azure Active Directory group, of which the specified type of insights are disabled for its members. Default is empty. Optional.
     *  @param string|null $value Value to set for the disabledForGroup property.
    */
    public function setDisabledForGroup(?string $value ): void {
        $this->disabledForGroup = $value;
    }

    /**
     * Sets the isEnabledInOrganization property value. true if the specified type of insights are enabled for the organization; false if the specified type of insights are disabled for all users without exceptions. Default is true. Optional.
     *  @param bool|null $value Value to set for the isEnabledInOrganization property.
    */
    public function setIsEnabledInOrganization(?bool $value ): void {
        $this->isEnabledInOrganization = $value;
    }

}
