<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThreatSubmissionRoot extends Entity implements Parsable 
{
    /**
     * @var array<EmailThreatSubmission>|null $emailThreats The emailThreats property
    */
    private ?array $emailThreats = null;
    
    /**
     * @var array<EmailThreatSubmissionPolicy>|null $emailThreatSubmissionPolicies The emailThreatSubmissionPolicies property
    */
    private ?array $emailThreatSubmissionPolicies = null;
    
    /**
     * @var array<FileThreatSubmission>|null $fileThreats The fileThreats property
    */
    private ?array $fileThreats = null;
    
    /**
     * @var array<UrlThreatSubmission>|null $urlThreats The urlThreats property
    */
    private ?array $urlThreats = null;
    
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
        return $this->emailThreats;
    }

    /**
     * Gets the emailThreatSubmissionPolicies property value. The emailThreatSubmissionPolicies property
     * @return array<EmailThreatSubmissionPolicy>|null
    */
    public function getEmailThreatSubmissionPolicies(): ?array {
        return $this->emailThreatSubmissionPolicies;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailThreats' => function (ParseNode $n) use ($o) { $o->setEmailThreats($n->getCollectionOfObjectValues(array(EmailThreatSubmission::class, 'createFromDiscriminatorValue'))); },
            'emailThreatSubmissionPolicies' => function (ParseNode $n) use ($o) { $o->setEmailThreatSubmissionPolicies($n->getCollectionOfObjectValues(array(EmailThreatSubmissionPolicy::class, 'createFromDiscriminatorValue'))); },
            'fileThreats' => function (ParseNode $n) use ($o) { $o->setFileThreats($n->getCollectionOfObjectValues(array(FileThreatSubmission::class, 'createFromDiscriminatorValue'))); },
            'urlThreats' => function (ParseNode $n) use ($o) { $o->setUrlThreats($n->getCollectionOfObjectValues(array(UrlThreatSubmission::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the fileThreats property value. The fileThreats property
     * @return array<FileThreatSubmission>|null
    */
    public function getFileThreats(): ?array {
        return $this->fileThreats;
    }

    /**
     * Gets the urlThreats property value. The urlThreats property
     * @return array<UrlThreatSubmission>|null
    */
    public function getUrlThreats(): ?array {
        return $this->urlThreats;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('emailThreats', $this->emailThreats);
        $writer->writeCollectionOfObjectValues('emailThreatSubmissionPolicies', $this->emailThreatSubmissionPolicies);
        $writer->writeCollectionOfObjectValues('fileThreats', $this->fileThreats);
        $writer->writeCollectionOfObjectValues('urlThreats', $this->urlThreats);
    }

    /**
     * Sets the emailThreats property value. The emailThreats property
     *  @param array<EmailThreatSubmission>|null $value Value to set for the emailThreats property.
    */
    public function setEmailThreats(?array $value ): void {
        $this->emailThreats = $value;
    }

    /**
     * Sets the emailThreatSubmissionPolicies property value. The emailThreatSubmissionPolicies property
     *  @param array<EmailThreatSubmissionPolicy>|null $value Value to set for the emailThreatSubmissionPolicies property.
    */
    public function setEmailThreatSubmissionPolicies(?array $value ): void {
        $this->emailThreatSubmissionPolicies = $value;
    }

    /**
     * Sets the fileThreats property value. The fileThreats property
     *  @param array<FileThreatSubmission>|null $value Value to set for the fileThreats property.
    */
    public function setFileThreats(?array $value ): void {
        $this->fileThreats = $value;
    }

    /**
     * Sets the urlThreats property value. The urlThreats property
     *  @param array<UrlThreatSubmission>|null $value Value to set for the urlThreats property.
    */
    public function setUrlThreats(?array $value ): void {
        $this->urlThreats = $value;
    }

}
