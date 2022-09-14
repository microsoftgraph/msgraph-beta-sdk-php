<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditLogRoot implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DirectoryAudit>|null $directoryAudits The directoryAudits property
    */
    private ?array $directoryAudits = null;
    
    /**
     * @var array<ProvisioningObjectSummary>|null $directoryProvisioning The directoryProvisioning property
    */
    private ?array $directoryProvisioning = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<ProvisioningObjectSummary>|null $provisioning The provisioning property
    */
    private ?array $provisioning = null;
    
    /**
     * @var array<SignIn>|null $signIns The signIns property
    */
    private ?array $signIns = null;
    
    /**
     * Instantiates a new AuditLogRoot and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.auditLogRoot');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditLogRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditLogRoot {
        return new AuditLogRoot();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the directoryAudits property value. The directoryAudits property
     * @return array<DirectoryAudit>|null
    */
    public function getDirectoryAudits(): ?array {
        return $this->directoryAudits;
    }

    /**
     * Gets the directoryProvisioning property value. The directoryProvisioning property
     * @return array<ProvisioningObjectSummary>|null
    */
    public function getDirectoryProvisioning(): ?array {
        return $this->directoryProvisioning;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'directoryAudits' => function (ParseNode $n) use ($o) { $o->setDirectoryAudits($n->getCollectionOfObjectValues(array(DirectoryAudit::class, 'createFromDiscriminatorValue'))); },
            'directoryProvisioning' => function (ParseNode $n) use ($o) { $o->setDirectoryProvisioning($n->getCollectionOfObjectValues(array(ProvisioningObjectSummary::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'provisioning' => function (ParseNode $n) use ($o) { $o->setProvisioning($n->getCollectionOfObjectValues(array(ProvisioningObjectSummary::class, 'createFromDiscriminatorValue'))); },
            'signIns' => function (ParseNode $n) use ($o) { $o->setSignIns($n->getCollectionOfObjectValues(array(SignIn::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the provisioning property value. The provisioning property
     * @return array<ProvisioningObjectSummary>|null
    */
    public function getProvisioning(): ?array {
        return $this->provisioning;
    }

    /**
     * Gets the signIns property value. The signIns property
     * @return array<SignIn>|null
    */
    public function getSignIns(): ?array {
        return $this->signIns;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('directoryAudits', $this->directoryAudits);
        $writer->writeCollectionOfObjectValues('directoryProvisioning', $this->directoryProvisioning);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('provisioning', $this->provisioning);
        $writer->writeCollectionOfObjectValues('signIns', $this->signIns);
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
     * Sets the directoryAudits property value. The directoryAudits property
     *  @param array<DirectoryAudit>|null $value Value to set for the directoryAudits property.
    */
    public function setDirectoryAudits(?array $value ): void {
        $this->directoryAudits = $value;
    }

    /**
     * Sets the directoryProvisioning property value. The directoryProvisioning property
     *  @param array<ProvisioningObjectSummary>|null $value Value to set for the directoryProvisioning property.
    */
    public function setDirectoryProvisioning(?array $value ): void {
        $this->directoryProvisioning = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the provisioning property value. The provisioning property
     *  @param array<ProvisioningObjectSummary>|null $value Value to set for the provisioning property.
    */
    public function setProvisioning(?array $value ): void {
        $this->provisioning = $value;
    }

    /**
     * Sets the signIns property value. The signIns property
     *  @param array<SignIn>|null $value Value to set for the signIns property.
    */
    public function setSignIns(?array $value ): void {
        $this->signIns = $value;
    }

}
