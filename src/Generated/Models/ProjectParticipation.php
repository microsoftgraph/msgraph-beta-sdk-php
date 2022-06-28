<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProjectParticipation extends ItemFacet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $categories Contains categories a user has associated with the project (for example, digital transformation, oil rig).
    */
    private ?array $categories = null;
    
    /**
     * @var CompanyDetail|null $client Contains detailed information about the client the project was for.
    */
    private ?CompanyDetail $client = null;
    
    /**
     * @var array<string>|null $collaborationTags Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
    */
    private ?array $collaborationTags = null;
    
    /**
     * @var array<RelatedPerson>|null $colleagues Lists people that also worked on the project.
    */
    private ?array $colleagues = null;
    
    /**
     * @var PositionDetail|null $detail Contains detail about the user's role on the project.
    */
    private ?PositionDetail $detail = null;
    
    /**
     * @var string|null $displayName Contains a friendly name for the project.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<RelatedPerson>|null $sponsors The Person or people who sponsored the project.
    */
    private ?array $sponsors = null;
    
    /**
     * @var string|null $thumbnailUrl The thumbnailUrl property
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * Instantiates a new ProjectParticipation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProjectParticipation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProjectParticipation {
        return new ProjectParticipation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the categories property value. Contains categories a user has associated with the project (for example, digital transformation, oil rig).
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the client property value. Contains detailed information about the client the project was for.
     * @return CompanyDetail|null
    */
    public function getClient(): ?CompanyDetail {
        return $this->client;
    }

    /**
     * Gets the collaborationTags property value. Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
     * @return array<string>|null
    */
    public function getCollaborationTags(): ?array {
        return $this->collaborationTags;
    }

    /**
     * Gets the colleagues property value. Lists people that also worked on the project.
     * @return array<RelatedPerson>|null
    */
    public function getColleagues(): ?array {
        return $this->colleagues;
    }

    /**
     * Gets the detail property value. Contains detail about the user's role on the project.
     * @return PositionDetail|null
    */
    public function getDetail(): ?PositionDetail {
        return $this->detail;
    }

    /**
     * Gets the displayName property value. Contains a friendly name for the project.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categories' => function (ParseNode $n) use ($o) { $o->setCategories($n->getCollectionOfPrimitiveValues()); },
            'client' => function (ParseNode $n) use ($o) { $o->setClient($n->getObjectValue(array(CompanyDetail::class, 'createFromDiscriminatorValue'))); },
            'collaborationTags' => function (ParseNode $n) use ($o) { $o->setCollaborationTags($n->getCollectionOfPrimitiveValues()); },
            'colleagues' => function (ParseNode $n) use ($o) { $o->setColleagues($n->getCollectionOfObjectValues(array(RelatedPerson::class, 'createFromDiscriminatorValue'))); },
            'detail' => function (ParseNode $n) use ($o) { $o->setDetail($n->getObjectValue(array(PositionDetail::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'sponsors' => function (ParseNode $n) use ($o) { $o->setSponsors($n->getCollectionOfObjectValues(array(RelatedPerson::class, 'createFromDiscriminatorValue'))); },
            'thumbnailUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the sponsors property value. The Person or people who sponsored the project.
     * @return array<RelatedPerson>|null
    */
    public function getSponsors(): ?array {
        return $this->sponsors;
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->categories);
        $writer->writeObjectValue('client', $this->client);
        $writer->writeCollectionOfPrimitiveValues('collaborationTags', $this->collaborationTags);
        $writer->writeCollectionOfObjectValues('colleagues', $this->colleagues);
        $writer->writeObjectValue('detail', $this->detail);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('sponsors', $this->sponsors);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
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
     * Sets the categories property value. Contains categories a user has associated with the project (for example, digital transformation, oil rig).
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the client property value. Contains detailed information about the client the project was for.
     *  @param CompanyDetail|null $value Value to set for the client property.
    */
    public function setClient(?CompanyDetail $value ): void {
        $this->client = $value;
    }

    /**
     * Sets the collaborationTags property value. Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
     *  @param array<string>|null $value Value to set for the collaborationTags property.
    */
    public function setCollaborationTags(?array $value ): void {
        $this->collaborationTags = $value;
    }

    /**
     * Sets the colleagues property value. Lists people that also worked on the project.
     *  @param array<RelatedPerson>|null $value Value to set for the colleagues property.
    */
    public function setColleagues(?array $value ): void {
        $this->colleagues = $value;
    }

    /**
     * Sets the detail property value. Contains detail about the user's role on the project.
     *  @param PositionDetail|null $value Value to set for the detail property.
    */
    public function setDetail(?PositionDetail $value ): void {
        $this->detail = $value;
    }

    /**
     * Sets the displayName property value. Contains a friendly name for the project.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the sponsors property value. The Person or people who sponsored the project.
     *  @param array<RelatedPerson>|null $value Value to set for the sponsors property.
    */
    public function setSponsors(?array $value ): void {
        $this->sponsors = $value;
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value ): void {
        $this->thumbnailUrl = $value;
    }

}
