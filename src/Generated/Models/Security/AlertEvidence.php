<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlertEvidence implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $createdDateTime The time the evidence was created and added to the alert.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var EvidenceRemediationStatus|null $remediationStatus The remediationStatus property
    */
    private ?EvidenceRemediationStatus $remediationStatus = null;
    
    /**
     * @var string|null $remediationStatusDetails Details about the remediation status.
    */
    private ?string $remediationStatusDetails = null;
    
    /**
     * @var array<EvidenceRole>|null $roles The role/s that an evidence entity represents in an alert, e.g., an IP address that is associated with an attacker will have the evidence role 'Attacker'.
    */
    private ?array $roles = null;
    
    /**
     * @var array<string>|null $tags Array of custom tags associated with an evidence instance, for example to denote a group of devices, high value assets, etc.
    */
    private ?array $tags = null;
    
    /**
     * @var EvidenceVerdict|null $verdict The verdict property
    */
    private ?EvidenceVerdict $verdict = null;
    
    /**
     * Instantiates a new alertEvidence and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.alertEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertEvidence {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.analyzedMessageEvidence': return new AnalyzedMessageEvidence();
                case '#microsoft.graph.security.cloudApplicationEvidence': return new CloudApplicationEvidence();
                case '#microsoft.graph.security.deviceEvidence': return new DeviceEvidence();
                case '#microsoft.graph.security.fileEvidence': return new FileEvidence();
                case '#microsoft.graph.security.ipEvidence': return new IpEvidence();
                case '#microsoft.graph.security.mailboxEvidence': return new MailboxEvidence();
                case '#microsoft.graph.security.mailClusterEvidence': return new MailClusterEvidence();
                case '#microsoft.graph.security.oauthApplicationEvidence': return new OauthApplicationEvidence();
                case '#microsoft.graph.security.processEvidence': return new ProcessEvidence();
                case '#microsoft.graph.security.registryKeyEvidence': return new RegistryKeyEvidence();
                case '#microsoft.graph.security.registryValueEvidence': return new RegistryValueEvidence();
                case '#microsoft.graph.security.securityGroupEvidence': return new SecurityGroupEvidence();
                case '#microsoft.graph.security.urlEvidence': return new UrlEvidence();
                case '#microsoft.graph.security.userEvidence': return new UserEvidence();
            }
        }
        return new AlertEvidence();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdDateTime property value. The time the evidence was created and added to the alert.
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
        return  [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remediationStatus' => fn(ParseNode $n) => $o->setRemediationStatus($n->getEnumValue(EvidenceRemediationStatus::class)),
            'remediationStatusDetails' => fn(ParseNode $n) => $o->setRemediationStatusDetails($n->getStringValue()),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfEnumValues(EvidenceRole::class)),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'verdict' => fn(ParseNode $n) => $o->setVerdict($n->getEnumValue(EvidenceVerdict::class)),
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
     * Gets the remediationStatus property value. The remediationStatus property
     * @return EvidenceRemediationStatus|null
    */
    public function getRemediationStatus(): ?EvidenceRemediationStatus {
        return $this->remediationStatus;
    }

    /**
     * Gets the remediationStatusDetails property value. Details about the remediation status.
     * @return string|null
    */
    public function getRemediationStatusDetails(): ?string {
        return $this->remediationStatusDetails;
    }

    /**
     * Gets the roles property value. The role/s that an evidence entity represents in an alert, e.g., an IP address that is associated with an attacker will have the evidence role 'Attacker'.
     * @return array<EvidenceRole>|null
    */
    public function getRoles(): ?array {
        return $this->roles;
    }

    /**
     * Gets the tags property value. Array of custom tags associated with an evidence instance, for example to denote a group of devices, high value assets, etc.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the verdict property value. The verdict property
     * @return EvidenceVerdict|null
    */
    public function getVerdict(): ?EvidenceVerdict {
        return $this->verdict;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('remediationStatus', $this->remediationStatus);
        $writer->writeStringValue('remediationStatusDetails', $this->remediationStatusDetails);
        $writer->writeCollectionOfEnumValues('roles', $this->roles);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeEnumValue('verdict', $this->verdict);
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
     * Sets the createdDateTime property value. The time the evidence was created and added to the alert.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the remediationStatus property value. The remediationStatus property
     *  @param EvidenceRemediationStatus|null $value Value to set for the remediationStatus property.
    */
    public function setRemediationStatus(?EvidenceRemediationStatus $value ): void {
        $this->remediationStatus = $value;
    }

    /**
     * Sets the remediationStatusDetails property value. Details about the remediation status.
     *  @param string|null $value Value to set for the remediationStatusDetails property.
    */
    public function setRemediationStatusDetails(?string $value ): void {
        $this->remediationStatusDetails = $value;
    }

    /**
     * Sets the roles property value. The role/s that an evidence entity represents in an alert, e.g., an IP address that is associated with an attacker will have the evidence role 'Attacker'.
     *  @param array<EvidenceRole>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value ): void {
        $this->roles = $value;
    }

    /**
     * Sets the tags property value. Array of custom tags associated with an evidence instance, for example to denote a group of devices, high value assets, etc.
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the verdict property value. The verdict property
     *  @param EvidenceVerdict|null $value Value to set for the verdict property.
    */
    public function setVerdict(?EvidenceVerdict $value ): void {
        $this->verdict = $value;
    }

}
