<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\CustomCalloutExtension;
use Microsoft\Graph\Beta\Generated\Models\CustomExtensionCallbackConfiguration;
use Microsoft\Graph\Beta\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomTaskExtension extends CustomCalloutExtension implements Parsable 
{
    /**
     * @var CustomExtensionCallbackConfiguration|null $callbackConfiguration The callbackConfiguration property
    */
    private ?CustomExtensionCallbackConfiguration $callbackConfiguration = null;
    
    /**
     * @var User|null $createdBy The createdBy property
    */
    private ?User $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var User|null $lastModifiedBy The lastModifiedBy property
    */
    private ?User $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new CustomTaskExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.customTaskExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomTaskExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomTaskExtension {
        return new CustomTaskExtension();
    }

    /**
     * Gets the callbackConfiguration property value. The callbackConfiguration property
     * @return CustomExtensionCallbackConfiguration|null
    */
    public function getCallbackConfiguration(): ?CustomExtensionCallbackConfiguration {
        return $this->callbackConfiguration;
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return User|null
    */
    public function getCreatedBy(): ?User {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callbackConfiguration' => function (ParseNode $n) use ($o) { $o->setCallbackConfiguration($n->getObjectValue(array(CustomExtensionCallbackConfiguration::class, 'createFromDiscriminatorValue'))); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return User|null
    */
    public function getLastModifiedBy(): ?User {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('callbackConfiguration', $this->callbackConfiguration);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
    }

    /**
     * Sets the callbackConfiguration property value. The callbackConfiguration property
     *  @param CustomExtensionCallbackConfiguration|null $value Value to set for the callbackConfiguration property.
    */
    public function setCallbackConfiguration(?CustomExtensionCallbackConfiguration $value ): void {
        $this->callbackConfiguration = $value;
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param User|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?User $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param User|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?User $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
