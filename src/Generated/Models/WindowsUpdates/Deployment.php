<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Deployment extends Entity implements Parsable 
{
    /**
     * @var DeploymentAudience|null $audience Specifies the audience to which content is deployed.
    */
    private ?DeploymentAudience $audience = null;
    
    /**
     * @var DeployableContent|null $content Specifies what content to deploy. Cannot be changed. Returned by default.
    */
    private ?DeployableContent $content = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the deployment was created. Returned by default. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time the deployment was last modified. Returned by default. Read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DeploymentSettings|null $settings Settings specified on the specific deployment governing how to deploy content. Returned by default.
    */
    private ?DeploymentSettings $settings = null;
    
    /**
     * @var DeploymentState|null $state Execution status of the deployment. Returned by default.
    */
    private ?DeploymentState $state = null;
    
    /**
     * Instantiates a new deployment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.deployment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Deployment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Deployment {
        return new Deployment();
    }

    /**
     * Gets the audience property value. Specifies the audience to which content is deployed.
     * @return DeploymentAudience|null
    */
    public function getAudience(): ?DeploymentAudience {
        return $this->audience;
    }

    /**
     * Gets the content property value. Specifies what content to deploy. Cannot be changed. Returned by default.
     * @return DeployableContent|null
    */
    public function getContent(): ?DeployableContent {
        return $this->content;
    }

    /**
     * Gets the createdDateTime property value. The date and time the deployment was created. Returned by default. Read-only.
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
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getObjectValue([DeploymentAudience::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([DeployableContent::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([DeploymentSettings::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getObjectValue([DeploymentState::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the deployment was last modified. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the settings property value. Settings specified on the specific deployment governing how to deploy content. Returned by default.
     * @return DeploymentSettings|null
    */
    public function getSettings(): ?DeploymentSettings {
        return $this->settings;
    }

    /**
     * Gets the state property value. Execution status of the deployment. Returned by default.
     * @return DeploymentState|null
    */
    public function getState(): ?DeploymentState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('audience', $this->audience);
        $writer->writeObjectValue('content', $this->content);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeObjectValue('state', $this->state);
    }

    /**
     * Sets the audience property value. Specifies the audience to which content is deployed.
     *  @param DeploymentAudience|null $value Value to set for the audience property.
    */
    public function setAudience(?DeploymentAudience $value ): void {
        $this->audience = $value;
    }

    /**
     * Sets the content property value. Specifies what content to deploy. Cannot be changed. Returned by default.
     *  @param DeployableContent|null $value Value to set for the content property.
    */
    public function setContent(?DeployableContent $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the deployment was created. Returned by default. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the deployment was last modified. Returned by default. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the settings property value. Settings specified on the specific deployment governing how to deploy content. Returned by default.
     *  @param DeploymentSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?DeploymentSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the state property value. Execution status of the deployment. Returned by default.
     *  @param DeploymentState|null $value Value to set for the state property.
    */
    public function setState(?DeploymentState $value ): void {
        $this->state = $value;
    }

}
