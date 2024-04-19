<?php

namespace App\Api\Models;

/**
 * @OA\Schema(
 *     schema="Comics",
 *     type="object",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="The unique ID of the comic resource (optional)",
 *     ),
 *     @OA\Property(
 *         property="digitalId",
 *         type="integer",
 *         description="The ID of the digital comic representation of this comic. Will be 0 if the comic is not available digitally (optional)",
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description="The canonical title of the comic (optional)",
 *     ),
 *     @OA\Property(
 *         property="issueNumber",
 *         type="number",
 *         format="double",
 *         description="The number of the issue in the series (will generally be 0 for collection formats) (optional)",
 *     ),
 *     @OA\Property(
 *         property="variantDescription",
 *         type="string",
 *         description="If the issue is a variant (e.g. an alternate cover, second printing, or director’s cut), a text description of the variant (optional)",
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="The preferred description of the comic (optional)",
 *     ),
 *     @OA\Property(
 *         property="modified",
 *         type="string",
 *         format="date",
 *         description="The date the resource was most recently modified (optional)",
 *     ),
 *     @OA\Property(
 *         property="isbn",
 *         type="string",
 *         description="The ISBN for the comic (generally only populated for collection formats) (optional)",
 *     ),
 *     @OA\Property(
 *         property="upc",
 *         type="string",
 *         description="The UPC barcode number for the comic (generally only populated for periodical formats) (optional)",
 *     ),
 *     @OA\Property(
 *         property="diamondCode",
 *         type="string",
 *         description="The Diamond code for the comic (optional)",
 *     ),
 *     @OA\Property(
 *         property="ean",
 *         type="string",
 *         description="The EAN barcode for the comic (optional)",
 *     ),
 *     @OA\Property(
 *         property="issn",
 *         type="string",
 *         description="The ISSN barcode for the comic (optional)",
 *     ),
 *     @OA\Property(
 *         property="format",
 *         type="string",
 *         description="The publication format of the comic e.g. comic, hardcover, trade paperback (optional)",
 *     ),
 *     @OA\Property(
 *         property="pageCount",
 *         type="integer",
 *         description="The number of story pages in the comic (optional)",
 *     ),
 *     @OA\Property(
 *         property="textObjects",
 *         type="any",
 *         description="A set of descriptive text blurbs for the comic (optional)",
 *     ),
 *     @OA\Property(
 *         property="resourceURI",
 *         type="string",
 *         description="The canonical URL identifier for this resource (optional)",
 *     ),
 *     @OA\Property(
 *         property="urls",
 *         type="any",
 *         description="A set of public web site URLs for the resource (optional)",
 *     ),
 * )
 **/
class Comics
{
	public ?int $id;
	public ?int $digitalId;
	public ?string $title;
	public ?int $issueNumber;
	public ?string $variantDescription;
	public ?string $description;
	public ?string $modified;
	public ?string $isbn;
	public ?string $upc;
	public ?string $diamondCode;
	public ?string $ean;
	public ?string $issn;
	public ?string $format;
	public ?int $pageCount;
	public ?array $textObjects;
	public ?string $resourceUri;

	public function set($data)
	{
		foreach ($data as $key => $value) {
			if (property_exists($this, $key)) {
				$this->{$key} = $value;
			}
		}
	}
}
