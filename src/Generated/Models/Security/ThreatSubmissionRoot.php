<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThreatSubmissionRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new threatSubmissionRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.threatSubmissionRoot');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatSubmissionRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatSubmissionRoot {
        return new ThreatSubmissionRoot();
    }

    /**
     * Gets the emailThreats property value. The emailThreats property
     * @return array<EmailThreatSubmission>|null
    */
    public function getEmailThreats(): ?array {
        return $this->getBackingStore()->get('emailThreats');
    }

    /**
     * Gets the emailThreatSubmissionPolicies property value. The emailThreatSubmissionPolicies property
     * @return array<EmailThreatSubmissionPolicy>|null
    */
    public function getEmailThreatSubmissionPolicies(): ?array {
        return $this->getBackingStore()->get('emailThreatSubmissionPolicies');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailThreats' => fn(ParseNode $n) => $o->setEmailThreats($n->getCollectionOfObjectValues([EmailThreatSubmission::class, 'createFromDiscriminatorValue'])),
            'emailThreatSubmissionPolicies' => fn(ParseNode $n) => $o->setEmailThreatSubmissionPolicies($n->getCollectionOfObjectValues([EmailThreatSubmissionPolicy::class, 'createFromDiscriminatorValue'])),
            'fileThreats' => fn(ParseNode $n) => $o->setFileThreats($n->getCollectionOfObjectValues([FileThreatSubmission::class, 'createFromDiscriminatorValue'])),
            'urlThreats' => fn(ParseNode $n) => $o->setUrlThreats($n->getCollectionOfObjectValues([UrlThreatSubmission::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fileThreats property value. The fileThreats property
     * @return array<FileThreatSubmission>|null
    */
    public function getFileThreats(): ?array {
        return $this->getBackingStore()->get('fileThreats');
    }

    /**
     * Gets the urlThreats property value. The urlThreats property
     * @return array<UrlThreatSubmission>|null
    */
    public function getUrlThreats(): ?array {
        return $this->getBackingStore()->get('urlThreats');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('emailThreats', $this->getEmailThreats());
        $writer->writeCollectionOfObjectValues('emailThreatSubmissionPolicies', $this->getEmailThreatSubmissionPolicies());
        $writer->writeCollectionOfObjectValues('fileThreats', $this->getFileThreats());
        $writer->writeCollectionOfObjectValues('urlThreats', $this->getUrlThreats());
    }

    /**
     * Sets the emailThreats property value. The emailThreats property
     *  @param array<EmailThreatSubmission>|null $value Value to set for the emailThreats property.
    */
    public function setEmailThreats(?array $value): void {
        $this->getBackingStore()->set('emailThreats', $value);
    }

    /**
     * Sets the emailThreatSubmissionPolicies property value. The emailThreatSubmissionPolicies property
     *  @param array<EmailThreatSubmissionPolicy>|null $value Value to set for the emailThreatSubmissionPolicies property.
    */
    public function setEmailThreatSubmissionPolicies(?array $value): void {
        $this->getBackingStore()->set('emailThreatSubmissionPolicies', $value);
    }

    /**
     * Sets the fileThreats property value. The fileThreats property
     *  @param array<FileThreatSubmission>|null $value Value to set for the fileThreats property.
    */
    public function setFileThreats(?array $value): void {
        $this->getBackingStore()->set('fileThreats', $value);
    }

    /**
     * Sets the urlThreats property value. The urlThreats property
     *  @param array<UrlThreatSubmission>|null $value Value to set for the urlThreats property.
    */
    public function setUrlThreats(?array $value): void {
        $this->getBackingStore()->set('urlThreats', $value);
    }

}
