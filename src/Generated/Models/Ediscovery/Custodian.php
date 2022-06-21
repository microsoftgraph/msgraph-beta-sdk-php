<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Custodian extends DataSourceContainer implements Parsable 
{
    /**
     * @var DateTime|null $acknowledgedDateTime Date and time the custodian acknowledged a hold notification.
    */
    private ?DateTime $acknowledgedDateTime = null;
    
    /**
     * @var bool|null $applyHoldToSources Identifies whether a custodian's sources were placed on hold during creation.
    */
    private ?bool $applyHoldToSources = null;
    
    /**
     * @var string|null $email Email address of the custodian.
    */
    private ?string $email = null;
    
    /**
     * @var array<SiteSource>|null $siteSources Data source entity for SharePoint sites associated with the custodian.
    */
    private ?array $siteSources = null;
    
    /**
     * @var array<UnifiedGroupSource>|null $unifiedGroupSources Data source entity for groups associated with the custodian.
    */
    private ?array $unifiedGroupSources = null;
    
    /**
     * @var array<UserSource>|null $userSources Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
    */
    private ?array $userSources = null;
    
    /**
     * Instantiates a new Custodian and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Custodian
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Custodian {
        return new Custodian();
    }

    /**
     * Gets the acknowledgedDateTime property value. Date and time the custodian acknowledged a hold notification.
     * @return DateTime|null
    */
    public function getAcknowledgedDateTime(): ?DateTime {
        return $this->acknowledgedDateTime;
    }

    /**
     * Gets the applyHoldToSources property value. Identifies whether a custodian's sources were placed on hold during creation.
     * @return bool|null
    */
    public function getApplyHoldToSources(): ?bool {
        return $this->applyHoldToSources;
    }

    /**
     * Gets the email property value. Email address of the custodian.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acknowledgedDateTime' => function (ParseNode $n) use ($o) { $o->setAcknowledgedDateTime($n->getDateTimeValue()); },
            'applyHoldToSources' => function (ParseNode $n) use ($o) { $o->setApplyHoldToSources($n->getBooleanValue()); },
            'email' => function (ParseNode $n) use ($o) { $o->setEmail($n->getStringValue()); },
            'siteSources' => function (ParseNode $n) use ($o) { $o->setSiteSources($n->getCollectionOfObjectValues(array(SiteSource::class, 'createFromDiscriminatorValue'))); },
            'unifiedGroupSources' => function (ParseNode $n) use ($o) { $o->setUnifiedGroupSources($n->getCollectionOfObjectValues(array(UnifiedGroupSource::class, 'createFromDiscriminatorValue'))); },
            'userSources' => function (ParseNode $n) use ($o) { $o->setUserSources($n->getCollectionOfObjectValues(array(UserSource::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the siteSources property value. Data source entity for SharePoint sites associated with the custodian.
     * @return array<SiteSource>|null
    */
    public function getSiteSources(): ?array {
        return $this->siteSources;
    }

    /**
     * Gets the unifiedGroupSources property value. Data source entity for groups associated with the custodian.
     * @return array<UnifiedGroupSource>|null
    */
    public function getUnifiedGroupSources(): ?array {
        return $this->unifiedGroupSources;
    }

    /**
     * Gets the userSources property value. Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
     * @return array<UserSource>|null
    */
    public function getUserSources(): ?array {
        return $this->userSources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('acknowledgedDateTime', $this->acknowledgedDateTime);
        $writer->writeBooleanValue('applyHoldToSources', $this->applyHoldToSources);
        $writer->writeStringValue('email', $this->email);
        $writer->writeCollectionOfObjectValues('siteSources', $this->siteSources);
        $writer->writeCollectionOfObjectValues('unifiedGroupSources', $this->unifiedGroupSources);
        $writer->writeCollectionOfObjectValues('userSources', $this->userSources);
    }

    /**
     * Sets the acknowledgedDateTime property value. Date and time the custodian acknowledged a hold notification.
     *  @param DateTime|null $value Value to set for the acknowledgedDateTime property.
    */
    public function setAcknowledgedDateTime(?DateTime $value ): void {
        $this->acknowledgedDateTime = $value;
    }

    /**
     * Sets the applyHoldToSources property value. Identifies whether a custodian's sources were placed on hold during creation.
     *  @param bool|null $value Value to set for the applyHoldToSources property.
    */
    public function setApplyHoldToSources(?bool $value ): void {
        $this->applyHoldToSources = $value;
    }

    /**
     * Sets the email property value. Email address of the custodian.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the siteSources property value. Data source entity for SharePoint sites associated with the custodian.
     *  @param array<SiteSource>|null $value Value to set for the siteSources property.
    */
    public function setSiteSources(?array $value ): void {
        $this->siteSources = $value;
    }

    /**
     * Sets the unifiedGroupSources property value. Data source entity for groups associated with the custodian.
     *  @param array<UnifiedGroupSource>|null $value Value to set for the unifiedGroupSources property.
    */
    public function setUnifiedGroupSources(?array $value ): void {
        $this->unifiedGroupSources = $value;
    }

    /**
     * Sets the userSources property value. Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
     *  @param array<UserSource>|null $value Value to set for the userSources property.
    */
    public function setUserSources(?array $value ): void {
        $this->userSources = $value;
    }

}
