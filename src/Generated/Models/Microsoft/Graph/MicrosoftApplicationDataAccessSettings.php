<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftApplicationDataAccessSettings extends Entity 
{
    /** @var string|null $disabledForGroup  */
    private ?string $disabledForGroup = null;
    
    /** @var bool|null $isEnabledForAllMicrosoftApplications  */
    private ?bool $isEnabledForAllMicrosoftApplications = null;
    
    /**
     * Instantiates a new microsoftApplicationDataAccessSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftApplicationDataAccessSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftApplicationDataAccessSettings {
        return new MicrosoftApplicationDataAccessSettings();
    }

    /**
     * Gets the disabledForGroup property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'disabledForGroup' => function (self $o, ParseNode $n) { $o->setDisabledForGroup($n->getStringValue()); },
            'isEnabledForAllMicrosoftApplications' => function (self $o, ParseNode $n) { $o->setIsEnabledForAllMicrosoftApplications($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isEnabledForAllMicrosoftApplications property value. 
     * @return bool|null
    */
    public function getIsEnabledForAllMicrosoftApplications(): ?bool {
        return $this->isEnabledForAllMicrosoftApplications;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('disabledForGroup', $this->disabledForGroup);
        $writer->writeBooleanValue('isEnabledForAllMicrosoftApplications', $this->isEnabledForAllMicrosoftApplications);
    }

    /**
     * Sets the disabledForGroup property value. 
     *  @param string|null $value Value to set for the disabledForGroup property.
    */
    public function setDisabledForGroup(?string $value ): void {
        $this->disabledForGroup = $value;
    }

    /**
     * Sets the isEnabledForAllMicrosoftApplications property value. 
     *  @param bool|null $value Value to set for the isEnabledForAllMicrosoftApplications property.
    */
    public function setIsEnabledForAllMicrosoftApplications(?bool $value ): void {
        $this->isEnabledForAllMicrosoftApplications = $value;
    }

}
