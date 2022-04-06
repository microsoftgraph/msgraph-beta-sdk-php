<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserInsightsSettings extends Entity 
{
    /** @var bool|null $isEnabled true if user's itemInsights and meeting hours insights are enabled; false if user's itemInsights and meeting hours insights are disabled. Default is true. Optional. */
    private ?bool $isEnabled = null;
    
    /**
     * Instantiates a new userInsightsSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserInsightsSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserInsightsSettings {
        return new UserInsightsSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'isEnabled' => function (self $o, ParseNode $n) { $o->setIsEnabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isEnabled property value. true if user's itemInsights and meeting hours insights are enabled; false if user's itemInsights and meeting hours insights are disabled. Default is true. Optional.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
    }

    /**
     * Sets the isEnabled property value. true if user's itemInsights and meeting hours insights are enabled; false if user's itemInsights and meeting hours insights are disabled. Default is true. Optional.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

}
