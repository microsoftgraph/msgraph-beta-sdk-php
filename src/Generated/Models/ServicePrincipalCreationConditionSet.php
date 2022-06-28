<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServicePrincipalCreationConditionSet extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $applicationIds The applicationIds property
    */
    private ?array $applicationIds = null;
    
    /**
     * @var array<string>|null $applicationPublisherIds The applicationPublisherIds property
    */
    private ?array $applicationPublisherIds = null;
    
    /**
     * @var bool|null $applicationsFromVerifiedPublisherOnly The applicationsFromVerifiedPublisherOnly property
    */
    private ?bool $applicationsFromVerifiedPublisherOnly = null;
    
    /**
     * @var array<string>|null $applicationTenantIds The applicationTenantIds property
    */
    private ?array $applicationTenantIds = null;
    
    /**
     * @var bool|null $certifiedApplicationsOnly The certifiedApplicationsOnly property
    */
    private ?bool $certifiedApplicationsOnly = null;
    
    /**
     * Instantiates a new servicePrincipalCreationConditionSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalCreationConditionSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalCreationConditionSet {
        return new ServicePrincipalCreationConditionSet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationIds property value. The applicationIds property
     * @return array<string>|null
    */
    public function getApplicationIds(): ?array {
        return $this->applicationIds;
    }

    /**
     * Gets the applicationPublisherIds property value. The applicationPublisherIds property
     * @return array<string>|null
    */
    public function getApplicationPublisherIds(): ?array {
        return $this->applicationPublisherIds;
    }

    /**
     * Gets the applicationsFromVerifiedPublisherOnly property value. The applicationsFromVerifiedPublisherOnly property
     * @return bool|null
    */
    public function getApplicationsFromVerifiedPublisherOnly(): ?bool {
        return $this->applicationsFromVerifiedPublisherOnly;
    }

    /**
     * Gets the applicationTenantIds property value. The applicationTenantIds property
     * @return array<string>|null
    */
    public function getApplicationTenantIds(): ?array {
        return $this->applicationTenantIds;
    }

    /**
     * Gets the certifiedApplicationsOnly property value. The certifiedApplicationsOnly property
     * @return bool|null
    */
    public function getCertifiedApplicationsOnly(): ?bool {
        return $this->certifiedApplicationsOnly;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationIds' => function (ParseNode $n) use ($o) { $o->setApplicationIds($n->getCollectionOfPrimitiveValues()); },
            'applicationPublisherIds' => function (ParseNode $n) use ($o) { $o->setApplicationPublisherIds($n->getCollectionOfPrimitiveValues()); },
            'applicationsFromVerifiedPublisherOnly' => function (ParseNode $n) use ($o) { $o->setApplicationsFromVerifiedPublisherOnly($n->getBooleanValue()); },
            'applicationTenantIds' => function (ParseNode $n) use ($o) { $o->setApplicationTenantIds($n->getCollectionOfPrimitiveValues()); },
            'certifiedApplicationsOnly' => function (ParseNode $n) use ($o) { $o->setCertifiedApplicationsOnly($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('applicationIds', $this->applicationIds);
        $writer->writeCollectionOfPrimitiveValues('applicationPublisherIds', $this->applicationPublisherIds);
        $writer->writeBooleanValue('applicationsFromVerifiedPublisherOnly', $this->applicationsFromVerifiedPublisherOnly);
        $writer->writeCollectionOfPrimitiveValues('applicationTenantIds', $this->applicationTenantIds);
        $writer->writeBooleanValue('certifiedApplicationsOnly', $this->certifiedApplicationsOnly);
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
     * Sets the applicationIds property value. The applicationIds property
     *  @param array<string>|null $value Value to set for the applicationIds property.
    */
    public function setApplicationIds(?array $value ): void {
        $this->applicationIds = $value;
    }

    /**
     * Sets the applicationPublisherIds property value. The applicationPublisherIds property
     *  @param array<string>|null $value Value to set for the applicationPublisherIds property.
    */
    public function setApplicationPublisherIds(?array $value ): void {
        $this->applicationPublisherIds = $value;
    }

    /**
     * Sets the applicationsFromVerifiedPublisherOnly property value. The applicationsFromVerifiedPublisherOnly property
     *  @param bool|null $value Value to set for the applicationsFromVerifiedPublisherOnly property.
    */
    public function setApplicationsFromVerifiedPublisherOnly(?bool $value ): void {
        $this->applicationsFromVerifiedPublisherOnly = $value;
    }

    /**
     * Sets the applicationTenantIds property value. The applicationTenantIds property
     *  @param array<string>|null $value Value to set for the applicationTenantIds property.
    */
    public function setApplicationTenantIds(?array $value ): void {
        $this->applicationTenantIds = $value;
    }

    /**
     * Sets the certifiedApplicationsOnly property value. The certifiedApplicationsOnly property
     *  @param bool|null $value Value to set for the certifiedApplicationsOnly property.
    */
    public function setCertifiedApplicationsOnly(?bool $value ): void {
        $this->certifiedApplicationsOnly = $value;
    }

}
